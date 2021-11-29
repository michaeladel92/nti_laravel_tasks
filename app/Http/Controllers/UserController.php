<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Redirect to create profile
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        guessExtension()
        getMimeType()
        store()
        asStore()
        storePublicly()
        move()
        getClientOriginalName()
        getClientMimeType()
        guessClientExtension()
        getSize()
        getError()
        isValid()
        
        */ 
        // $test = $request->file('image')->getError();
        // dd($test);

        $data = $this->validate($request,[
            "name" => ["required",'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            "email" => "required|email",
            "password" => "required|confirmed|min:6",
            "address" => "required|min:10",
            "linkdin" => "required|url",
            "gender" => "required",
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'

        ]);
        if($request->isMethod('post')){
            
            $newImageName = md5(uniqid().'_'.time()).'.'.$request->image->extension();
            // move image to public folder named images
            $request->image->move(public_path('images'),$newImageName);
    
            // $request->file->store('public');
            return view('profile',compact('data','newImageName'));
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
