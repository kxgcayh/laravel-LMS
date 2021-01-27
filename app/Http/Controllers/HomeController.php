<?php

namespace App\Http\Controllers;

use App\Models\Classroom\Classes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $models = Classes::with('instructors')->get();

        return view('home', compact('models'));
    }
}
