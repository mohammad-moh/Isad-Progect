<?php

namespace App\Http\Controllers;

use App\Models\LivingIncome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LivingController extends Controller
{
    
    public function index()
    {
        $living = LivingIncome::all();
        return view('living.index', compact('living'));
    }

    
    public function create()
    {
       return view('living.create'); 
        
    }

   
    public function store(Request $request)
    {   
        $validate=Validator::make($request->all(),[
            'support_name' => 'required',
            'amount' => 'required|min:0',
            'payment_method' => 'required',
            'total_income' => 'required|min:0',
        ]);
        if($validate->fails()){
        return back()->withErrors($validate->errors())->withInput();
      }
            
            $living=new LivingIncome();
            $living->support_name=$request->support_name;
            $living->amount=$request->amount;
            $living->payment_method=$request->payment_method;
            $living->total_income=$request->total_income;
            $living->save();
            return redirect()->back()->with('msg','Created New Living Income successfully');
    }

 
    public function show($id)
    {
        $living=LivingIncome::find($id);
        return view('living.show',compact('living'));
    }

    
    public function edit($id)
    {
        $living=LivingIncome::find($id);
        return view('living.edit',compact('living'));
    }

   
    public function update(Request $request, $id)
    {
        $validate=Validator::make($request->all(),[
            'support_name' => 'required',
            'amount' => 'required|min:0',
            'payment_method' => 'required',
            'total_income' => 'required|min:0',
        ]);
        if($validate->fails()){
        return back()->withErrors($validate->errors())->withInput();
        }
            
        $living=LivingIncome::find($id);
        $living->support_name=$request->support_name;
        $living->amount=$request->amount;
        $living->payment_method=$request->payment_method;
        $living->total_income=$request->total_income;
        $living->save();
        return redirect()->back()->with('msg','Updated Living Income successfully');
    }

   
    public function destroy($id)
    {
        $living=LivingIncome::find($id);
        $living->delete();
        return redirect()->back()->with('msg','Deleted Living Income successfully');
    }
}