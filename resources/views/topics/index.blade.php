@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Topics</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($topics as $topic)
                            <li class="list-group-item">
                                <a href="/topics/{{ $topic->slug }}">{{ $topic->title }}</a> <strong>{{ $topic->created_at->diffForHumans() }}</strong> <hr>
                                    @foreach ($topic->posts as $post)
                                        <p>{{ $post->body }} - {{ $post->user->name }}</p>
                                    @endforeach
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
