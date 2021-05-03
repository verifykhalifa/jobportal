<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Facade\Input;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('employee.employeeindex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee.createresume');
        
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
            
            'careerobj' => 'required',
            'userid' => 'required',
            'job_title' => 'required',
            'companyname' => 'required',
            'workstart' => 'required',
            'workend' => 'required',
            'instituename' => 'required',
            'fromyear' => 'required',
            'toyear' => 'required',
            'qualification' => 'required',
            'birthday' => 'required',
            'birthplace' => 'required',
            'phone' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'location' => 'required',
            'cover_image' => 'image|nullable|max:1999',
        ]);


        //Handle file uploads
        if($request->hasFile('cover_image')){
            //Get file name with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/storage',$fileNameToStore);
            } else {
            $fileNameToStore = 'noimage.jpg';
            }


            //dd($validatedData);
        $save = new Employee();
        $save->careerobj      = $request['careerobj'];
        $save->job_title      = $request['job_title'];
        $save->companyname    = $request['companyname'];
        $save->workstart      = $request['workstart'];
        $save->workend        = $request['workend'];
        $save->Job_levels     = $request['Job_levels'];
        $save->instituename   = $request['instituename'];
        $save->fromyear       = $request['fromyear'];
        $save->toyear         = $request['toyear'];
        $save->qualification  = $request['qualification'];
        $save->userid         = Auth::user()->id;
        $save->birthday       = $request['birthday'];
        $save->birthplace     = $request['birthplace'];
        $save->phone          = $request['phone'];
        $save->nationality    = $request['nationality'];
        $save->gender         = $request['gender'];
        $save->location       = $request['location'];
        $save->gender         = $request['gender'];
        $save->cover_image    = $request['cover_image'];


            if ($request->hasFile('cover_image')){

                $save->cover_image = $fileNameToStore;
            }


        if($save->save()){


            return view('employee.employeeindex')->with("success","Record saved succesfully");
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
        //$id = Auth::user()->id;
        //$adminds = Employee::where('userid','=', $id)->get();
        //dd($adminds);
        return view('employee.employeeresume');
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
        //$adminds = Employee::find($id);
        //dd($posts);
        return view('employee.editresume');
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
         //dd($request);
        $validatedData = $request->validate([
            
            'careerobj' => 'required',
            'userid' => 'required',
            'job_title' => 'required',
            'companyname' => 'required',
            'workstart' => 'required',
            'workend' => 'required',
            'instituename' => 'required',
            'fromyear' => 'required',
            'toyear' => 'required',
            'qualification' => 'required',
            'birthday' => 'required',
            'birthplace' => 'required',
            'phone' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'location' => 'required',
            'cover_image' => 'image|nullable|max:1999',
        ]);


        //Handle file uploads
        if($request->hasFile('cover_image')){
            //Get file name with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/storage',$fileNameToStore);
            } else {
            $fileNameToStore = 'noimage.jpg';
            }


            //dd($validatedData);
        $save = Employee::find($id);
        $save->careerobj      = $request['careerobj'];
        $save->job_title      = $request['job_title'];
        $save->companyname    = $request['companyname'];
        $save->workstart      = $request['workstart'];
        $save->workend        = $request['workend'];
        $save->Job_levels     = $request['Job_levels'];
        $save->instituename   = $request['instituename'];
        $save->fromyear       = $request['fromyear'];
        $save->toyear         = $request['toyear'];
        $save->qualification  = $request['qualification'];
        $save->userid         = $request['userid'];
        $save->birthday       = $request['birthday'];
        $save->birthplace     = $request['birthplace'];
        $save->phone          = $request['phone'];
        $save->nationality    = $request['nationality'];
        $save->gender         = $request['gender'];
        $save->location       = $request['location'];
        $save->gender         = $request['gender'];
        $save->cover_image    = $request['cover_image'];


            if ($request->hasFile('cover_image')){

                $save->cover_image = $fileNameToStore;
            }


        if($save->save()){


            return redirect()->back();
        }
        
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
