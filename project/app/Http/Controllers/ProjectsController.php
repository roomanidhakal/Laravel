<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('projects.index', [
            'projects' => auth()->user()->projects
        ]);
    }

    public function create()
    {
    	return view('projects.create');
    } 

    public function show(Project $project)
    {
        //abort_if
        //abort_unless
        abort_if(\Gate::denies('update', $project), 403);
        //$this->authorize('update', $project);
    	return view('projects.show', compact('project'));
    }

    public function store()
    {
        $validated_attributes = $this->validateProject();
        $validated_attributes['owner_id'] = auth()->id();

        $project = Project::create($validated_attributes);
    	return redirect('/projects');$project->$owner->email;
    }

    public function edit(Project $project)
    {
        abort_if(\Gate::denies('update', $project), 403);
    	return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {  
        abort_if(\Gate::denies('update', $project), 403); 

        $project->update($this->validateProject());
        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        abort_if(\Gate::denies('update', $project), 403);
    	$project->delete();

    	return redirect('/projects');
    }

    public function validateProject()
    {
        return request()->validate([
            'title' => ['required', 'min:4', 'max:100'],
            'description' => ['required','min:10', 'max:200']
        ]);
    }
}