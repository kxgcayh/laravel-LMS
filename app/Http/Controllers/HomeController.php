<?php

namespace App\Http\Controllers;

use App\Models\Classroom\Classes;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $roles = auth()->user()->role('teacher')->get('id');
        // dd($roles);

        $user = Auth::id();
        $instructor = User::with('studentClass')->find($user);
        // dd($instructor->name);
        $models = Classes::with('students', 'instructors')->get();

        return view('home', compact('models'));
    }
}
