<?php
/**
 * Created by PhpStorm.
 * User: Sanglaw
 * Date: 23/06/2017
 * Time: 16:55
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_histories extends Model
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
        'time',
        'numero_article',
        'delete'
    ];
}