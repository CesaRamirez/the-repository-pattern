<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['user_id', 'line1'];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
