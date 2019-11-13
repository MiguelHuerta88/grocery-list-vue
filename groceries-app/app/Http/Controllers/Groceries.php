<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Groceries extends Controller
{
    /**
     * Entry point for the Vue App
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('spa');
    }
}
