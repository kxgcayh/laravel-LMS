<?php

namespace App\Http\Controllers;

class RoutingController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except('index');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display a view based on first route param.
     *
     * @param mixed $first
     * @param mixed $folder
     *
     * @return \Illuminate\Http\Response
     */
    public function root($folder)
    {
        if ('assets' != $folder) {
            return view('contents.'.$folder.'.index');
        }

        return view('index');
    }

    /**
     * second level route.
     *
     * @param mixed $folder
     * @param mixed $file
     */
    public function secondLevel($folder, $file)
    {
        if ('assets' != $folder) {
            return view('contents.'.$folder.'.'.$file);
        }

        return view('index');
    }

    /**
     * third level route.
     *
     * @param mixed $folder
     * @param mixed $subFolder
     * @param mixed $file
     */
    public function thirdLevel($folder, $subFolder, $file)
    {
        if ('assets' != $folder) {
            return view($folder.'.'.$subFolder.'.'.$file);
        }

        return view('index');
    }
}
