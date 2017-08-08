<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\TopicRepository;
use App\Repositories\Eloquent\Criteria\ByUser;
use App\Repositories\Eloquent\Criteria\EagerLoad;
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
                                      new IsLive(),
                                      new ByUser(auth()->id()),
                                      new EagerLoad(['posts', 'posts.user'])
                                      )
                       ->all();

        return view('topics.index', compact('topics'));
    }
}
