<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Jobs;
use Illuminate\Http\Facade\Input;
use DB;


class jobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.employerdash');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //dd('helllo');
        return view('employer/createjob');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
       
        $validatedData = $request->validate([
           
            'job_title' => 'required',
            'job_category' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'experience_level' => 'required',
            'requirement' => 'required',
            'userid' => 'required',
            'jobsummary' => 'required',
            'keyresponsibility' => 'required',
            'qualification' => 'required',
            'agreement' => 'required',
            
        ]);
    


            //dd($validatedData);
        $save = new Jobs();
        $save->job_title            = $request['job_title'];
        $save->job_category         = $request['job_category'];
        $save->location             = $request['location'];
        $save->salary               = $request['salary'];
        $save->experience_level     = $request['experience_level'];
        $save->requirement          = $request['requirement'];
        $save->userid               = Auth::user()->id;
        $save->jobsummary           = $request['jobsummary'];
        $save->keyresponsibility    = $request['keyresponsibility'];
        $save->qualification        = $request['qualification'];
        $save->agreement            = $request['agreement'];

            

        if($save->save()){


            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $newjobs = Jobs::all();
        return view("employer.alljobs")->with('newjobs',$newjobs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
