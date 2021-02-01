<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Models\Classroom\Classes;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    public function show($id)
    {
        $class = Classes::with('students')->findOrFail($id);
        // dd($class->students->count());

        return view('contents.classes.show', compact('class'));
    }

    public function getMyClass()
    {
        $models = Classes::whereHas('instructors', function ($q) {
            $q->where('user_id', '=', Auth::id());
        })->get();

        return response()->json($models);
    }
}
