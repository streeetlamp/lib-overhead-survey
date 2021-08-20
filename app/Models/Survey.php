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
        'affiliation',
        'location',
        'purpose'
    ];
}
