<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\TopicRepository;
use App\Repositories\Eloquent\Criteria\ByUser;
use App\Repositories\Eloquent\Criteria\EagerLoad;
use App\Repositories\Eloquent\Criteria\IsLive;
use App\Repositories\Eloquent\Criteria\LatestFirst;

class TopicController extends Controller
{
    /**
     * topics variable.
     *
     * @var \App\Topic
     */
    protected $topics;

    /**
     * Constructor topic controller.
     *
     * @param \App\Repositories\Contracts\TopicRepository $topics
     */
    public function __construct(TopicRepository $topics)
    {
        $this->topics = $topics;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = $this->topics
                       ->withCriteria(
                          new LatestFirst(),
                          new IsLive(),
                          new ByUser(auth()->id()),
                          new EagerLoad(['posts', 'posts.user']))
                       ->all();

        return view('topics.index', compact('topics'));
    }

    /**
     * Show specific resource by slug.
     *
     * @param string $slug
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $topic = $this->topics
                      ->withCriteria([
                          new EagerLoad(['posts', 'posts.user']),
                      ])
                      ->findBySlug($slug);

        return view('topics.show', compact('topic'));
    }
}
