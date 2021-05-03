<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\staff;
use Illuminate\Http\Facade\Input;
use DB;

class staffcontroller extends Controller
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
        return view('Admin/staffcreate');
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
            'name' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'country' => 'required',
            'birthday' => 'required',
            'website' => 'required',
            'password' => 'required',
        ]);
            //dd($validatedData);
        $save = new staff();
        $save->name       = $request['name'];
        $save->city       = $request['city'];
        $save->phone      = $request['phone'];
        $save->role       = $request['role'];
        $save->country    = $request['country'];
        $save->birthday   = $request['birthday'];
        $save->website    = $request['website'];
        $save->password   = $request['password'];
        $save->save();

        if($save){
            return view('Admin.superadmin');
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
        $newstaffs = staff::all();
        //dd($newstaff);
        return view("Admin.staffview")->with('newstaffs',$newstaffs);
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
