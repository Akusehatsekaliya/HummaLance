<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\DataTables;

class LanguageController extends Controller
{
    private FileService $fileservice;

    public function __construct()
    {
        $this->fileservice = new FileService("lang");
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax()) {
            return DataTables::of(Language::all())->addIndexColumn()->make();
        }
        return view("admin.language");
    }

    public function detail($id)
    {
        //
        $language = Language::find($id);
        $files = [
            "$language->locale.json",
            ...$this->fileservice->getFolderFiles($language->locale)
        ];
        return view("admin.language.detail", compact("language", "files"));
    }

    public function detailEdit(Request $request, $id)
    {
        $language = Language::findOrFail($id);

        $file = $request->query('file');
        $fileKey = pathinfo($file, PATHINFO_FILENAME);

        $langKey = Lang::get($fileKey);

        $preview = route($request->query("preview") ?? "landing.index");

        return view("admin.language.detail-edit", compact("language", "file", "langKey", "preview"));
    }

    // public function detailEdit(Request $request, $id)
    // {
    //     $language = Language::findOrFail($id);

    //     $file = $request->query('file');
    //     $fileKey = pathinfo($file, PATHINFO_FILENAME);

    //     $langKey = Lang::get($fileKey);

    //     return view("admin.language.detail-edit", compact("language", "file", "langKey"));
    // }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Language::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $language = Language::find($id);
        $language->delete();
    }
}
