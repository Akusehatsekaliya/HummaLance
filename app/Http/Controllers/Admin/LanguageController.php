<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\UserSetting;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\DataTables;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

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
        UserSetting::where("user_id", auth()->id())->update([
            "languages_id" => $language->id
        ]);
        $files = [
            "$language->locale.json",
            ...$this->fileservice->getFolderFiles($language->locale)
        ];
        return view("admin.language.detail", compact("language", "files"));
    }

    public function detailEdit(Request $request, $id)
    {
        $language = Language::findOrFail($id);
        $routeName = $request->query('route');
        $langKey = Lang::get(str_replace('.', '/', $routeName));

        if (!Route::has($routeName)) {
            return response()->view('errors.notfound', [], 404);
        }

        return view('admin.language.detail-edit', compact('langKey', 'id'));

        $response = Route::dispatch(Request::create(route($routeName)));

        if ($response instanceof \Illuminate\Http\Response) {
            $originalContent = $response->getContent();
            $injectedHtml = view('admin.language.detail-edit', compact('langKey', 'id'))->render();
        
            $modifiedContent = str_replace('</body>', $injectedHtml . '</body>', $originalContent);
            $response->setContent($modifiedContent);
        
            return $response;
        }
        
        return response()->view('errors.notfound', [], 404);
    }

    public function detailUpdate(Request $request, $id)
    {
        $language = Language::findOrFail($id);
        $this->fileservice->updateFileContent($request->file, $request->key, $request->value);
    }



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
