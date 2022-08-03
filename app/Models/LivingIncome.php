<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivingIncome extends Model
{
    use HasFactory;

    protected $fillable = [
        'support_name', 'amount', 
        'payment_method', 'total_income'
    ];
}