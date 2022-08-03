<?php

namespace App\Http\Controllers;

use App\Models\PrimaryData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PrimaryController extends Controller
{
    
    public function index(){
        $details=PrimaryData::all();
        return view('primarydata.index',compact('details'));
     }

    public function create()
    {
        return view('primarydata.create');
    }

   
    public function store(Request $request)
    {
      $validate=Validator::make($request->all(),[
        'name'=>'required',
        'id_number'=>'required',
        'exp_identity_date'=>'required',
        'birth_date'=>'required',
        'marital_status'=>'required',
        'divorce_date'=>'required',
        'has_divorce_reason'=>'required',
        'there_divorce_family'=>'required',
        'divorce_reason'=>'required',
        'have_custody_deed'=>'required',
        'have_guardianship_deed_over_children'=>'required',
        'have_avisitor_deed_your_children'=>'required',
        'number_of_marriages'=>'required',
        'phone'=>'required',
        'another_phone'=>'required',
        'have_car'=>'required',
        'national'=>'required',
        'education_level'=>'required',
        'general_health_condition'=>'required',
        'experiences_skills'=>'required',
        'have_desire_join_labor_market'=>'required',
        'have_courses_join_labormarket'=>'required',
        'benefit_psychological_counseling'=>'required',
        'benefits_financial_support'=>'required',
        'judicial_legal_children'=>'required',
        'name_bank'=>'required',
        'iban_account_number'=>'required',
        'have_suspended_services'=>'required',
      ]);
      if($validate->fails()){
        return redirect()->back()->withErrors($validate)->withInput();
      }
        $details=new PrimaryData;
        $details->name=$request->name;
        $details->id_number=$request->id_number;
        $details->exp_identity_date=$request->exp_identity_date;
        $details->birth_date=$request->birth_date;
        $details->marital_status=$request->marital_status;
        $details->divorce_date=$request->divorce_date;
        $details->has_divorce_reason=$request->has_divorce_reason;
        $details->there_divorce_family=$request->there_divorce_family;
        $details->divorce_reason=$request->divorce_reason;
        $details->have_custody_deed=$request->have_custody_deed;
        $details->have_guardianship_deed_over_children=$request->have_guardianship_deed_over_children;
        $details->have_avisitor_deed_your_children=$request->have_avisitor_deed_your_children;
        $details->number_of_marriages=$request->number_of_marriages;
        $details->phone=$request->phone;
        $details->another_phone=$request->another_phone;
        $details->have_car=$request->have_car;
        $details->national=$request->national;
        $details->education_level=$request->education_level;
        $details->general_health_condition=$request->general_health_condition;
        $details->experiences_skills=$request->experiences_skills;
        $details->have_desire_join_labor_market=$request->have_desire_join_labor_market;
        $details->have_courses_join_labormarket=$request->have_courses_join_labormarket;
        $details->benefit_psychological_counseling=$request->benefit_psychological_counseling;
        $details->benefits_financial_support=$request->benefits_financial_support;
        $details->judicial_legal_children=$request->judicial_legal_children;
        $details->name_bank=$request->name_bank;
        $details->iban_account_number=$request->iban_account_number;
        $details->have_suspended_services=$request->have_suspended_services;
        $details->save();
        return redirect()->route('primarydata.index')->with('success','Data Added Successfully');
    }

    
    public function show($id)
    {
        $primarydata=PrimaryData::find($id);
        return view('primarydata.show',compact('primarydata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $primarydata=PrimaryData::find($id);
        return view('primarydata.edit',compact('primarydata'));
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
        $primarydata=PrimaryData::find($id);
        $primarydata->name=$request->name;
        $primarydata->id_number=$request->id_number;
        $primarydata->exp_identity_date=$request->exp_identity_date;
        $primarydata->birth_date=$request->birth_date;
        $primarydata->marital_status=$request->marital_status;
        $primarydata->divorce_date=$request->divorce_date;
        $primarydata->has_divorce_reason=$request->has_divorce_reason;
        $primarydata->there_divorce_family=$request->there_divorce_family;
        $primarydata->divorce_reason=$request->divorce_reason;
        $primarydata->have_custody_deed=$request->have_custody_deed;
        $primarydata->have_guardianship_deed_over_children=$request->have_guardianship_deed_over_children;
        $primarydata->have_avisitor_deed_your_children=$request->have_avisitor_deed_your_children;
        $primarydata->number_of_marriages=$request->number_of_marriages;
        $primarydata->phone=$request->phone;
        $primarydata->another_phone=$request->another_phone;
        $primarydata->have_car=$request->have_car;
        $primarydata->national=$request->national;
        $primarydata->education_level=$request->education_level;
        $primarydata->general_health_condition=$request->general_health_condition;
        $primarydata->experiences_skills=$request->experiences_skills;
        $primarydata->have_desire_join_labor_market=$request->have_desire_join_labor_market;
        $primarydata->have_courses_join_labormarket=$request->have_courses_join_labormarket;
        $primarydata->benefit_psychological_counseling=$request->benefit_psychological_counseling;
        $primarydata->benefits_financial_support=$request->benefits_financial_support;
        $primarydata->judicial_legal_children=$request->judicial_legal_children;       
        $primarydata->name_bank=$request->name_bank;
        $primarydata->iban_account_number=$request->iban_account_number;
        $primarydata->have_suspended_services=$request->have_suspended_services;
        $primarydata->save();
        return redirect()->route('primarydata.index')->with('success','Data Updated Successfully');
    }

   
    public function destroy($id)
    {
        $primary=PrimaryData::find($id);
        $primary->delete();
        return redirect()->back()->with('msg','Deleted Primary Data successfully');
    }
}