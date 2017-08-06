<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\TopicRepository;
use App\Topic;

class EloquentTopicRepository implements TopicRepository
{
    public function all()
    {
        return Topic::all();
    }
}
