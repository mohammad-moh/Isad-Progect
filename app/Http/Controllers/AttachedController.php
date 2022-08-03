<?php

namespace App\Http\Controllers;

use App\Models\AttachedMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttachedController extends Controller
{
    public function index()
    {
        $attached = AttachedMedia::all();
        return view('attached.index', compact('attached'));
    }

   
    public function create()
    {
        return view('attached.create');
    }

    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'national_id_residency_copy_passport' => 'required',
            'family_record_family_card' => 'required',
            'picture_from_absher' => 'required',
            'proof_of_social_status' => 'required',
            'official_documents' => 'required',
            'proof_of_residence' => 'required',
            'affiliate_identity' => 'required',
            'medical_report' => 'required',
            'proof_of_financial_status' => 'required',
            'others' => 'required',
        ]);
            if($validate->fails()){
                return redirect()->back()->withErrors($validate)->withInput();
            }
            $attached = new AttachedMedia;
            $attached->national_id_residency_copy_passport = $request->national_id_residency_copy_passport;
            $attached->family_record_family_card = $request->family_record_family_card;
            $attached->picture_from_absher = $request->picture_from_absher;
            $attached->proof_of_social_status = $request->proof_of_social_status;
            $attached->official_documents = $request->official_documents;
            $attached->proof_of_residence = $request->proof_of_residence;
            $attached->affiliate_identity = $request->affiliate_identity;
            $attached->medical_report = $request->medical_report;
            $attached->proof_of_financial_status = $request->proof_of_financial_status;
            $attached->others = $request->others;
            $attached->save();
            return redirect()->back()->with('msg','Created New Attached Media successfully');
    
    }

    public function show($id)
    {
        $attached = AttachedMedia::find($id);
        return view('attached.show',compact('attached'));
    }

    public function edit($id)
    {
        $attached = AttachedMedia::find($id);
        return view('attached.edit',compact('attached'));
    }

    public function update(Request $request, $id)
    {
        $validate=Validator::make($request->all(),[
            'national_id_residency_copy_passport' => 'required',
            'family_record_family_card' => 'required',
            'picture_from_absher' => 'required',
            'proof_of_social_status' => 'required',
            'official_documents' => 'required',
            'proof_of_residence' => 'required',
            'affiliate_identity' => 'required',
            'medical_report' => 'required',
            'proof_of_financial_status' => 'required',
            'others' => 'required',
        ]);
            if($validate->fails()){
                return redirect()->back()->withErrors($validate)->withInput();
            }
            $attached = AttachedMedia::find($id);
            $attached->national_id_residency_copy_passport = $request->national_id_residency_copy_passport;
            $attached->family_record_family_card = $request->family_record_family_card;
            $attached->picture_from_absher = $request->picture_from_absher;
            $attached->proof_of_social_status = $request->proof_of_social_status;
            $attached->official_documents = $request->official_documents;
            $attached->proof_of_residence = $request->proof_of_residence;
            $attached->affiliate_identity = $request->affiliate_identity;
            $attached->medical_report = $request->medical_report;
            $attached->proof_of_financial_status = $request->proof_of_financial_status;
            $attached->others = $request->others;
            $attached->save();
            return redirect()->back()->with('msg','Updated Attached Media successfully');
    }

   
    public function destroy($id)
    {
        $attached = AttachedMedia::find($id);
        $attached->delete();
        return redirect()->back()->with('msg','Deleted Attached Media successfully');
    }
}