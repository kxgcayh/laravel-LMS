<?php

namespace App\Http\Controllers;

use App\Models\Classroom\Classes;
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
        // ? Menampilkan kelas berdasarkan user(instructor) yang login
        $models = Classes::whereHas('instructors', function ($q) {
            $q->where('user_id', '=', Auth::id());
        })->get();

        return view('home', compact('models'));
    }
}
