<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  Student::orderBy('id','desc')->get();
        return view('index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Redirect to create Student
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
            "name" => ["required",'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',"max:50"],
            "email" => "required|email|max:100",
            "password" => "required|confirmed|min:6|max:100",
            "address" => "required|max:255",
            "linkdin" => "required|url|max:255",
            "gender" => "required|max:20",
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'

        ]);
        if($request->isMethod('post')){
            
            $newImageName = md5(uniqid().'_'.time()).'.'.$request->image->extension();
            // move image to public folder named images
            $request->image->move(public_path('images'),$newImageName);
            $data['password'] = bcrypt($data['password']);
            $data['image']    = $newImageName;

            $op = Student::create($data);
            if($op){$message = "01 Row Inserted";}
            else{$message ="Error, Please Try Again!";}
            session()->flash('Message',$message);
            return redirect(url('/students'));
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
        $data = Student::find($id);
        return view('editStudent',['data' => $data]);
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
        $data = $this->validate($request,[
            "name" => ["required",'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',"max:50"],
            "email" => "required|email|max:100",
            "password" => "required|confirmed|min:6|max:100",
            "address" => "required|max:255",
            "linkdin" => "required|url|max:255",
            "gender" => "required|max:20",
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'

        ]);
        if($request->isMethod('post')){
           
            $newImageName = md5(uniqid().'_'.time()).'.'.$request->image->extension();
            // move image to public folder named images
            $request->image->move(public_path('images'),$newImageName);
            $data['password'] = bcrypt($data['password']);
            $data['image']    = $newImageName;

            $oldImage =  Student::where('id',$id)->value('image');
            if(File::exists(public_path('images/'.$oldImage))){
                File::delete(public_path('images/'.$oldImage));
            }

            $op = Student::where('id',$id)->update($data);
            if($op){$message = "01 Row Updated";}
            else{$message ="Error, Please Try Again!";}
            session()->flash('Message',$message);
            return redirect(url('/students'));
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
        $image =  Student::where('id',$id)->value('image');
        
        if(File::exists(public_path('images/'.$image))){
            File::delete(public_path('images/'.$image));
        }

        $op = student::where('id',$id)->delete();
        if($op){$message = "row Deleted";}
        else{$message = "error";}
        session()->flash('Message',$message);
        return redirect(url('/students'));
    }
}
