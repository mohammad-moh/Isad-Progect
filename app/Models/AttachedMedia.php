<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachedMedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'national_id_residency_copy_passport', 
        'family_record_family_card',
         'picture_from_absher',
         'proof_of_social_status',
         'official_documents',
         'proof_of_residence',
         'affiliate_identity',
         'medical_report',
         'proof_of_financial_status',
         'others'
        ];
}