<?php

namespace App\Http\Controllers;

use App\Models\CommitmentsFamily;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommitmentController extends Controller
{
    
    //  'name_creditor', 
    //     'debit_amount',
    //      'payment_method'
     
    public function index()
    {
        $commitments = CommitmentsFamily::all();
        return view('commitment.index', compact('commitments'));
    }

    
    public function create()
    {
        return view('commitment.create');
        
    }

   
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'name_creditor'=>'required|max:255',
            'debit_amount'=>'required|numeric|min:0|max:100000',
            'payment_method'=>'required|max:255',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }
        $commitment=new CommitmentsFamily();
        $commitment->name_creditor=$request->name_creditor;
        $commitment->debit_amount=$request->debit_amount;
        $commitment->payment_method=$request->payment_method;
        $commitment->save();
        return redirect()->back()->with('msg','Created New Commitment successfully');
        
    }

   
    public function show($id)
    {
        $commitment=CommitmentsFamily::find($id);
        return view('commitment.show',compact('commitment'));
        
    }


    public function edit($id)
    {
        $commitment=CommitmentsFamily::find($id);
        return view('commitment.edit',compact('commitment'));
    }

   
    public function update(Request $request, $id)
    {
        $validate=Validator::make($request->all(),[
            'name_creditor'=>'required|max:255',
            'debit_amount'=>'required|numeric|min:0|max:100000',
            'payment_method'=>'required|max:255',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }
        $commitment=CommitmentsFamily::find($id);
        $commitment->name_creditor=$request->name_creditor;
        $commitment->debit_amount=$request->debit_amount;
        $commitment->payment_method=$request->payment_method;
        $commitment->save();
        return redirect()->back()->with('msg','Updated Commitment successfully');
    }

   
    public function destroy($id)
    {
        $commitment=CommitmentsFamily::find($id);
        $commitment->delete();
        return redirect()->back()->with('msg','Deleted Commitment successfully');
    }
}