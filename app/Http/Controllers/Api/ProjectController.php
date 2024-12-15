<?php

namespace App\Http\Controllers\Api;

use App\Constract\Interfaces\ProjectInterface;
use App\Http\Controllers\Controller;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private ProjectInterface $projectInterface;
    private ProjectService $projectService;

    public function __construct(ProjectInterface $projectInterface, ProjectService $projectService)
    {
        $this->projectInterface = $projectInterface;
        $this->projectService = $projectService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->projectService->getData($request);
    }
    /**
     * Display a total of the resource.
     */
    public function total()
    {
        return $this->projectInterface->total();
    }
}
