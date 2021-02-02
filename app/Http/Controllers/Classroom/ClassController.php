<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Models\Classroom\Classes;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ClassController extends Controller
{
    public function show($id, Request $request)
    {
        $class = Classes::with('manyStudent', 'manyTask')->findOrFail($id);
        $students = User::whereHas('manyClass', function ($q) use ($id) { $q->where('class_id', '=', $id); })->get();
        $tasks = Task::whereHas('manyClass', function ($q) use ($id) { $q->where('class_id', '=', $id); })->get();
        // foreach ($students as $student) {
        //     dd($student->name);
        // }

        if ($request->ajax()) {
            return DataTables::of($class)
                ->addIndexColumn()
                ->addColumn('action', function () {
                    return '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                })->rawColumns(['action'])->make(true)
            ;
        }

        return view('contents.classes.show', compact('class', 'students', 'tasks'))->with('studentNo', 'taskNo');
    }
}
