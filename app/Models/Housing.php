<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housing extends Model
{
    use HasFactory;
    protected $fillable=[
        'housing_type','live_with_your_relatives_in_house_or_apartment',
        'housing_ownership','rent_payment_method','Value_rent','rent_expiry_date',
          'house_owner_name','city_you_live_in','neighborhood_you_live_in', 
             'you_eligible_for_housing_support_in_program_Ministry_of_Housing',
             
     ];
}