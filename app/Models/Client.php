<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /** @use HasFactory<\Database\Factories\ClientFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'surname1',
        'surname2',
        'onboarding_phase',
        'telephone1',
        'telephone2',
        'email1',
        'email2',
        'relative_description'
    ];

}
