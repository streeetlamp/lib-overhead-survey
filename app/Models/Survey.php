<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $table = 'surveys';
    public $timestamps = true;

    protected $casts = [
    ];

    protected $fillable = [
        'status',
        'status_other',
        'affiliation',
        'location',
        'purpose',
        'sesh',
        'resource',
        'sponsor',
        'principal',
        'grant',
        'non_funded',
        'patient_care',
        'other_sponsored',
        'other_activities',
    ];
}
