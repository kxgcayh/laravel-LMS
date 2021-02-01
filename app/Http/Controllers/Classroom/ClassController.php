<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Models\Classroom\Classes;

class ClassController extends Controller
{
    public function show($id)
    {
        $class = Classes::with('students')->findOrFail($id);
        // dd($class->students->count());

        return view('contents.classes.show', compact('class'));
    }
}
