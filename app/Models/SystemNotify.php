<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemNotify extends Model
{
    use HasFactory;

    protected $fillable = [
        'incoming_requests',
        'other_notifications',
    ];
}