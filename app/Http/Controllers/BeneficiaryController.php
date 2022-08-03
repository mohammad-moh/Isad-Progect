<?php

namespace App\Http\Controllers;

use App\Models\BeneficiaryAffiliate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BeneficiaryController extends Controller
{
    public function index()
    {
        $beneficiary = BeneficiaryAffiliate::all();
        return view('beneficiary.index', compact('beneficiary'));
    }

    
    public function create()
    {
        return view('beneficiary.create');
    }
    
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'affiliate_name' => 'required',
            'identification_number' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'relative_relation' => 'required',
            'general_health_condition' => 'required',
            'education_type' => 'required',
            'have_desire_training_course_join_labor_market' => 'required',
            'monthly_salary' => 'required',
            'skills_experiences' => 'required',
        ]);
            if($validate->fails()){
                return redirect()->back()->withErrors($validate)->withInput();
            }
            $beneficiary = new BeneficiaryAffiliate;
            $beneficiary->affiliate_name = $request->affiliate_name;
            $beneficiary->identification_number = $request->identification_number;
            $beneficiary->date_of_birth = $request->date_of_birth;
            $beneficiary->gender = $request->gender;
            $beneficiary->relative_relation =  $request->relative_relation;
            $beneficiary->general_health_condition=$request->general_health_condition;
            $beneficiary->education_type=$request->education_type;
            $beneficiary->have_desire_training_course_join_labor_market=$request->have_desire_training_course_join_labor_market;
            $beneficiary->monthly_salary=$request->monthly_salary;
            $beneficiary->skills_experiences=$request->skills_experiences;
            $beneficiary->save();
            return redirect()->route('beneficiary.index')->with('success','Beneficiary has been created successfully');
    }
            
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beneficiary = BeneficiaryAffiliate::find($id);
        return view('beneficiary.show',compact('beneficiary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beneficiary = BeneficiaryAffiliate::find($id);
        return view('beneficiary.edit',compact('beneficiary'));
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
        // $validate=Validator::make($request->all(),[
        //     'affiliate_name' => 'required',
        //     'identification_number' => 'required',
        //     'date_of_birth' => 'required',
        //     'gender' => 'required',
        //     'relative_relation' => 'required',
        //     'general_health_condition' => 'required',
        //     'education_type' => 'required',
        //     'have_desire_training_course_join_labor_market' => 'required',
        //     'monthly_salary' => 'required',
        //     'skills_experiences' => 'required',
        // ]);
        // if($validate->fails()){
        //     return redirect()->back()->withErrors($validate)->withInput();
        // }
        $beneficiary = BeneficiaryAffiliate::find($id);
        $beneficiary->affiliate_name = $request->affiliate_name;
        $beneficiary->identification_number = $request->identification_number;
        $beneficiary->date_of_birth = $request->date_of_birth;
        $beneficiary->gender = $request->gender;
        $beneficiary->relative_relation =  $request->relative_relation;
        $beneficiary->general_health_condition=$request->general_health_condition;
        $beneficiary->education_type=$request->education_type;
        $beneficiary->have_desire_training_course_join_labor_market=$request->have_desire_training_course_join_labor_market;
        $beneficiary->monthly_salary=$request->monthly_salary;
        $beneficiary->skills_experiences=$request->skills_experiences;
        $beneficiary->save();
        return redirect()->route('beneficiary.index')->with('success','Beneficiary has been updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beneficiary = BeneficiaryAffiliate::find($id);
        $beneficiary->delete();
        return redirect()->route('beneficiary.index')->with('success','Beneficiary has been deleted successfully');
    }
}