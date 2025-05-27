<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'image_path', 'content', 'published_at'];

    protected $dates = ['published_at'];
}
