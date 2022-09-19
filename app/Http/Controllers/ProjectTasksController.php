<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

use App\Models\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project){
        $attributes = request() -> validate(['description' => 'required']);

        $project -> addTask($attributes);
        return back();        
    }

    public function update(Task $task){
        $task -> update([
            'completed' => request() -> has('completed')
        ]);
    }
}
