<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $fillable=[
        'beneficiary_name',
        'email',
        'phone',
        'gender',
        'language',
        'time_zone',       
    ];
}