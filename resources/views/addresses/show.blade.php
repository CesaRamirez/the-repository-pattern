@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Show Topic {{ $topic->title }}</div>

                <div class="panel-body">
                    {{ $topic->title }} <strong><small>{{ $topic->created_at->diffForHumans() }}</small></strong> <hr>
                    @foreach ($topic->posts as $post)
                        <p>{{ $post->body }} - {{ $post->user->name }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
