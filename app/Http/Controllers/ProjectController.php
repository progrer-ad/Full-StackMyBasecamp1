<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use Illuminate\View\View;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request) : RedirectResponse
    {
        Project::create($request->all());
        return redirect()->route('projects.index')
                ->withSuccess('New project is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project) : View
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project) : View
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project) : RedirectResponse
    {
        $project->update($request->all());
        return redirect()->back()
                ->withSuccess('project is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project) : RedirectResponse
    {
        $project->delete();
        return redirect()->route('projects.index')
                ->withSuccess('project is deleted successfully.');
    }
}
