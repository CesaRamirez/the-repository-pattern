@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Topics</div>

                <div class="panel-body">
                    <ul class="list-group">
                        @foreach ($topics as $topic)
                            <li class="list-group-item">
                                {{ $topic->title }} <strong>{{ $topic->created_at->diffForHumans() }}</strong> <hr>
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
