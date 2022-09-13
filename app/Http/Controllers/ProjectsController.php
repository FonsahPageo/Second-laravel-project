<?php

namespace App\Http\Controllers;

use App\Models\Project;

use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    // public function show ($id){
        public function show (Project $project){
            // $project = Project::findOrFail($id);
            return view('projects.show', compact('project'));
        }

    public function create (){
        return view('projects.create');
    }

    public function store(){
       Project::create(request() -> validate([
            'title' => ['required', 'min: 3'],
            'description' => ['required', 'min: 3']
        ]));
        
        return redirect('/projects');

    }

    public function edit (Project $project){ 
        return view('projects.edit', compact('project'));
    }

    public function update (Project $project){
        $project -> update(request(['title', 'description']));
        // $project -> title = request('title');
        // $project -> description = request('description');
        // $project -> save();

        return redirect('/projects');
    }

    public function destroy (Project $project){
        $project -> delete();
        return redirect('/projects');
    }

}