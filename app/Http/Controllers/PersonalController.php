<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonalController extends Controller
{
    public function index()
    {
        $personals=PersonalInfo::all();
        return view('personal.index',compact('personals'));
     
        
    }

    public function create()
    {
        return view('personal.create');
    }

 
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
        'beneficiary_name' => 'required|max:255',
        'email' => 'required|email',
        'phone' => 'required',
        'gender'=>['required','in:male,female'],
        'language'=> 'required',
        'time_zone'=>'required',
    ]);
    if($validate->fails()){
        return back()->withErrors($validate->errors())->withInput();
      }

        
        $personal=new PersonalInfo();
        $personal->beneficiary_name=$request->beneficiary_name;
        $personal->email=$request->email;
        $personal->phone=$request->phone;
        $personal->gender=$request->gender;
        $personal->language=$request->language;
        $personal->time_zone=$request->time_zone;
        $personal->save();
        return redirect()->back()->with('msg','Created New Personal successfully');
    }


    public function show($id)
    {
        $personal=PersonalInfo::find($id);
        return view('personal.show',compact('personal'));
    }

   
    public function edit($id)
    {
        $personal=PersonalInfo::find($id);
        return view('personal.edit',compact('personal'));
    }

   
    public function update(Request $request, $id)
    {
        $personal=PersonalInfo::find($id);
        $personal->beneficiary_name=$request->beneficiary_name;
        $personal->email=$request->email;
        $personal->phone=$request->phone;
        $personal->gender=$request->gender;
        $personal->language=$request->language;
        $personal->time_zone=$request->time_zone;
        $personal->save();
        return redirect()->back()->with('msg', 'Updated Item successfully');
    }

  
    public function destroy($id)
    {
        $personal=PersonalInfo::find($id);
        $personal->delete();
        return redirect()->route('personal.index');
    }
}