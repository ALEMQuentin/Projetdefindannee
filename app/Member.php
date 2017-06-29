<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'adresse',
        'code_postale',
        'region'
    ];
}
