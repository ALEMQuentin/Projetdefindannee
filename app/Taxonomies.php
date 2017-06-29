<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxonomies extends Model
{
    protected $fillable = [
        'title',
        'type',
        'style'
    ];
}
