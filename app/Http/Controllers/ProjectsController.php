<?php

namespace App\Http\Controllers;

use App\Project;
use App\Services\Twitter;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->only(['index', 'store']); // apply auth to only index or store method
        // $this->middleware('auth')->except(['index', 'store']); // apply auth to all except index or store method
        $this->middleware('auth');
    }

    public function index()
    {
        // Helper functions for auth()
        // auth()->id(); // 4
        // auth()->user(); // user instance
        // auth()->check(); // boolean if the its authenticated
        // auth()->guest();
        // $projects = Project::where('owner_id', auth()->id())->get();
        // $projects = auth()->user()->projects;

        return view('projects.projects', [
            'projects' => auth()->user()->projects
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $validated = $this->validateProject();

        $validated['owner_id'] = auth()->id();

        Project::create($validated);

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        // if ($project->owner_id !== auth()->id()) {
        //     abort(403);
        // } // or to shorten above

        // abort_if($project->owner_id !== auth()->id(), 403);

        // Gate
        // abort_if(Gate::denies('update', $project), 403);
        // abort_unless(Gate::allows('update', $project), 403);

        $this->authorize('update', $project); // this is the recommended way by Jeff Way

        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $this->authorize('update', $project);

        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $this->authorize('update', $project);

        $project->update($this->validateProject());

        return redirect('/projects/'. $project->id);
    }

    public function destroy(Project $project)
    {
        $this->authorize('update', $project);

        $project->delete();

        return redirect('/projects');
    }

    public function validateProject()
    {
        return request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);
    }
}
