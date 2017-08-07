<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\TopicRepository;
use App\Repositories\Eloquent\Criteria\IsLive;
use App\Repositories\Eloquent\Criteria\LatestFirst;

class TopicController extends Controller
{
    protected $topics;

    public function __construct(TopicRepository $topics)
    {
        $this->topics = $topics;
    }

    public function index()
    {
        $topics = $this->topics
                       ->withCriteria(new LatestFirst(),
                                      new IsLive()
                                      )
                       ->all();

        return view('topics.index', compact('topics'));
    }
}
