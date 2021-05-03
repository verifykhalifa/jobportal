<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Superadmin;
use Illuminate\Http\Facade\Input;
use DB;

class superadmincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Admin/superadmin');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin/complete');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request);
       
        $validatedData = $request->validate([
            
            'city' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'birthday' => 'required',
            'website' => 'required',
            'gender' => 'required',
            'admin_image' => 'image|nullable|max:1999',
        ]);
        

        //Handle file uploads
        if($request->hasFile('admin_image')){
            //Get file name with the extension
            $fileNameWithExt = $request->file('admin_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('admin_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('admin_image')->storeAs('public/admin_image',$fileNameToStore);
            } else {
            $fileNameToStore = 'noimage.jpg';
            }



            //dd($validatedData);
        $save = new Superadmin();
        $save->city      = $request['city'];
        $save->phone     = $request['phone'];
        $save->country   = $request['country'];
        $save->birthday  = $request['birthday'];
        $save->website   = $request['website'];
        $save->gender    = $request['gender'];

            if ($request->hasFile('admin_image')){

                $save->admin_image = $fileNameToStore;
            }


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
        $adminds = Superadmin::all();
        //dd($adminds);
        return view("Admin.profile")->with('adminds',$adminds);
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
