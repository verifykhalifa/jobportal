<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function logins(){
        return view('pages.logins');
    }
    public function signups(){
        return view('pages.signups');
    }
    public function index(){
        return view('pages.index');
    }
}
