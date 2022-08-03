<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeneficiaryAffiliate extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'affiliate_name','identification_number',
        'date_of_birth','gender','relative_relation',
        'general_health_condition','education_type',
        'have_desire_training_course_join_labor_market',
        'monthly_salary','skills_experiences'
    ];
}