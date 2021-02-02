<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $upcomings = Task::with('user')->where('end', '>=', now())->get();
        $totalUpcoming = Task::with('user')->where('end', '>=', now())->count();

        // $todays = Task::with('user')->where('end', '<', now())->get();
        $todays = Task::with('user', 'manyClass')->where('end', '<', now())->get();
        // dd($todays);
        $totalToday = Task::with('user')->where('end', '<', now())->count();

        return view('contents.task.index', compact('upcomings', 'totalUpcoming', 'todays', 'totalToday'));
    }

    public function edit($id)
    {
        // .
    }
}
