<?php

namespace App;

use App\Traits\Eloquent\HasLive;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasLive;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'user_id', 'live'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $dates = ['created_at', 'published_at'];

    /**
     * relation with posts.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
