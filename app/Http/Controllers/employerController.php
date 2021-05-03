<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Employer;
use Illuminate\Http\Request;
use Illuminate\Http\Facade\Input;
use DB;

class employerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            return view('employer.employerindex');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employer.createprofile');
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
            'phone'                   => 'required',
            'job_sector'              => 'required',
            'userid'                  => 'required',
            'location'                => 'required',
            'mission'                 => 'required',
            'achievement_title'       => 'required',
            'yearofach'               => 'required',
            'achdescription'          => 'required',
            'cover_image'             => 'image|nullable|max:1999',
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
        $save = new Employer();
        $save->phone                     = $request['phone'];
        $save->job_sector                = $request['job_sector'];
        $save->location                  = $request['location'];
        $save->userid                    = Auth::user()->id;
        $save->mission                   = $request['mission'];
        $save->achievement_title         = $request['achievement_title'];
        $save->yearofach                 = $request['yearofach'];
        $save->achdescription            = $request['achdescription'];
        $save->cover_image               = $request['cover_image'];
        $save->save();

        if ($request->hasFile('cover_image')){

            $save->cover_image = $fileNameToStore;
        }


    if($save->save()){

        notify()->success("Testing testing","Success","topRight");
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
        //$adminds = Employer::all();
        //dd(Auth::user()->name);
        return view('employer.employerinfo');
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
        return view('employer.editinfo');
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
        
        //dd($request->all());
        $validatedData = $request->validate([
            
            'phone' => 'required',
            'job_sector' => 'required',
            'location' => 'required',
            'userid'   => 'required',
            'mission' => 'required',
            'achievement_title' => 'required',
            'yearofach' => 'required',
            'achdescription' => 'required'
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
            }else {
                $fileNameToStore = 'noimage.jpg';
            }


            //dd($validatedData);
        $save = Employer::find($id);
        //dd($save);
        $save->phone                = $request['phone'];
        $save->job_sector           = $request['job_sector'];
        $save->location             = $request['location'];
        $save->userid               = Auth::user()->id; 
        $save->mission              = $request['mission'];
        $save->achievement_title    = $request['achievement_title'];
        $save->achdescription       = $request['achdescription'];



            if ($request->hasFile('cover_image')){

                $save->cover_image = $fileNameToStore;
            }


        if($save->save()){

            //dd('am here');
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
