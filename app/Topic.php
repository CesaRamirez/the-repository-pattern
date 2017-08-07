<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title', 'slug', 'user_id'];

    protected $dates = ['created_at', 'published_at'];
}
