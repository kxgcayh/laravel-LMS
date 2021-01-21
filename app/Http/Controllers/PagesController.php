<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function calendars()
    {
        return view('contents.calendar.index');
    }

    public function tasks()
    {
        return view('contents.task.index');
    }

    public function classes()
    {
        return view('contents.class.index');
    }
}
