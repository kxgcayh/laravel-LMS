<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Models\Classroom\Classes;

class ClassController extends Controller
{
    public function getMyClass()
    {
        $models = Classes::with('instructors')->get();

        return response()->json($models);
    }
}
