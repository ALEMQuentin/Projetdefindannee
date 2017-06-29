<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'resume',
        'meta_description',
        'media',
        'media_link',
        'meta_robot',
        'seo',
        'image_title',
        'tag',
        'catégorie',
        'delete'
    ];
}
