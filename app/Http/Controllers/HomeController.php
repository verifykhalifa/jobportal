<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\Employee;
use App\Employer;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Facade\Input;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
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
        return view('home');
    }

    public function signin(){
        return view('file.signin');
    }

    public function signup(){
        return view('file.signup');
    }

    public function jobpost(){
        return view('file.jobpost');
    }

    public function jobdetails($id){
        $posts = Jobs::find($id);
        $employerinfos = Employer::all();
        //dd($employerinfo);
        return view('file.jobdetails')->with('posts',$posts)->with('employerinfos',$employerinfos);
    }

    public function joblisting(){
        $newjobs = Jobs::all();
         //dd($newjobs);
        return view('file.joblisting')->with('newjobs',$newjobs);
    }

    public function employeeprofile(){
        //$adminds = Employee::all();
        //$session = session()->put('details', $adminds);
        //$value = session()->get('details');
        //$val_arr = $value->array();
        //dd($value);
        return view('file.employeeprofile');
    }
    
    public function employerprofile(){
        return view('file.employerprofile');
    }

    public function viewresume(){
        return view('file.viewresume');
    }

    public function viewcompany(){
        return view('file.viewcompany');
    }

    public function contact(){
        return view('file.contact');
    }

    public function pricing(){
        return view('file.pricing');
    }

    public function notification(){
        return view('file.notification');
    }

    public function comingsoon(){
        return view('file.comingsoon');
    }

  
    
}

