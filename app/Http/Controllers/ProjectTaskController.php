<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class ProjectTaskController extends Controller
{
    public function update(Request $request, Task $task) {

        $task->update([
            'completed' => request()->has('completed'),
        ]);

        return back();
    }
}
