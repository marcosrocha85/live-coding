<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    const COMPANY = 2;
    const PERSON = 1;

    protected $fillable = [
        'business_name',
        'commercial_name',
        'person_type',
        'fiscal_document',
        'telefone'
    ];
}
