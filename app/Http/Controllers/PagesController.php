<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function tasks()
    {
        return view('contents.task.index');
    }

    public function classes()
    {
        return view('contents.class.index');
    }
}
