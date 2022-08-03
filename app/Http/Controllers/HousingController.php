<?php

namespace App\Http\Controllers;

use App\Models\Housing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HousingController extends Controller
{
    public function index()
    {
        $housing = Housing::all();
        return view('housing.index', compact('housing'));
    }

  
    public function create()
    {
        return view('housing.create');
        
    }

    
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'housing_type' => 'required',
            'live_with_your_relatives_in_house_or_apartment' => 'required',
            'housing_ownership' => 'required',
            'rent_payment_method' => 'required',
            'Value_rent' => 'required|min:0|max:100000',
            'rent_expiry_date' => 'required|date|date_format:Y-m-d|after:yesterday',
            'house_owner_name' => 'required',
            'city_you_live_in' => 'required',
            'neighborhood_you_live_in' => 'required',
            'you_eligible_for_housing_support_in_program_Ministry_of_Housing' => 'required',
        ]);
        if($validate->fails()){
        return back()->withErrors($validate->errors())->withInput();
        }
                
                $housing=new Housing();
                $housing->housing_type=$request->housing_type;
                $housing->live_with_your_relatives_in_house_or_apartment=$request->live_with_your_relatives_in_house_or_apartment;
                $housing->housing_ownership=$request->housing_ownership;
                $housing->rent_payment_method=$request->rent_payment_method;
                $housing->Value_rent=$request->Value_rent;
                $housing->rent_expiry_date=$request->rent_expiry_date;
                $housing->house_owner_name=$request->house_owner_name;
                $housing->city_you_live_in=$request->city_you_live_in;
                $housing->neighborhood_you_live_in=$request->neighborhood_you_live_in;
                $housing->you_eligible_for_housing_support_in_program_Ministry_of_Housing=$request->you_eligible_for_housing_support_in_program_Ministry_of_Housing;
                $housing->save();
                return redirect()->back()->with('msg','Created New Housing Income successfully');
    }

   
    public function show($id)
    {
        $housing=Housing::find($id);
        return view('housing.show',compact('housing'));
    }

    
    public function edit($id)
    {
        $housing=Housing::find($id);
        return view('housing.edit',compact('housing'));
    }

   
    public function update(Request $request, $id)
    {
        $validate=Validator::make($request->all(),[
            'housing_type' => 'required',
            'live_with_your_relatives_in_house_or_apartment' => 'required',
            'housing_ownership' => 'required',
            'rent_payment_method' => 'required',
            'Value_rent' => 'required|min:0|max:100000',
            'rent_expiry_date' => 'required|date|date_format:Y-m-d|after:yesterday',
            'house_owner_name' => 'required',
            'city_you_live_in' => 'required',
            'neighborhood_you_live_in' => 'required',
            'you_eligible_for_housing_support_in_program_Ministry_of_Housing' => 'required',
        ]);
        if($validate->fails()){
        return back()->withErrors($validate->errors())->withInput();
        }

                $housing=Housing::find($id);
                $housing->housing_type=$request->housing_type;
                $housing->live_with_your_relatives_in_house_or_apartment=$request->live_with_your_relatives_in_house_or_apartment;
                $housing->housing_ownership=$request->housing_ownership;
                $housing->rent_payment_method=$request->rent_payment_method;
                $housing->Value_rent=$request->Value_rent;
                $housing->rent_expiry_date=$request->rent_expiry_date;
                $housing->house_owner_name=$request->house_owner_name;
                $housing->city_you_live_in=$request->city_you_live_in;
                $housing->neighborhood_you_live_in=$request->neighborhood_you_live_in;
                $housing->you_eligible_for_housing_support_in_program_Ministry_of_Housing=$request->you_eligible_for_housing_support_in_program_Ministry_of_Housing;
                $housing->save();
                return redirect()->back()->with('msg','Updated Housing Income successfully');
    }

 
    public function destroy($id)
    {
        $housing=Housing::find($id);
        $housing->delete();
        return redirect()->back()->with('msg','Deleted Housing Income successfully');
    }
}