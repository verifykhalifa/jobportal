<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dcontroller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function superdash()
    {
        return view('dashboard.superdash');
    }

    public function employerdash(){
        return view('dashboard.employerdash');
    }
}
