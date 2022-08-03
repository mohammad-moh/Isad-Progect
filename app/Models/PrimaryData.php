<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimaryData extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','id_number','exp_identity_date',
        'birth_date','marital_status','divorce_date',
        'has_divorce_reason','there_divorce_family',
        'divorce_reason','have_custody_deed',
        'have_guardianship_deed_over_children',
        'have_avisitor_deed_your_children',
        'number_of_marriages','phone','another_phone',
        'have_car','nationality','education_level',
        'general_health_condition','experiences_skills',
        'have_desire_join_labor_market',
        'have_courses_join_labormarket',
        'benefit_psychological_counseling',
        'benefits_financial_support',
        'judicial_legal_children',
        'name_bank','iban_account_number',
        'have_suspended_services'
        
    ];
}