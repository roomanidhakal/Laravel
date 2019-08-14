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
    	$projects = Project::where('owner_id', auth()->id())->get();
    	return view('projects.index', ['projects' => $projects]);
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
        $validated_attributes = request()->validate([
            'title' => ['required', 'min:4', 'max:100'],
            'description' => ['required','min:10', 'max:200']
        ]);
        $validated_attributes['owner_id'] = auth()->id();
        Project::create($validated_attributes);
    	return redirect('/projects');
    }

    public function edit(Project $project)
    {
        abort_if(\Gate::denies('update', $project), 403);
    	return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {  
        abort_if(\Gate::denies('update', $project), 403); 
        $update = request()->validate([
            'title' => ['required', 'min:4', 'max:100'],
            'description' => ['required','min:10', 'max:200']
        ]);
        $project->update($update);
        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        abort_if(\Gate::denies('update', $project), 403);
    	$project->delete();

    	return redirect('/projects');
    }
}