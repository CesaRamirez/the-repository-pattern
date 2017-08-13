@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Addresses</div>

                <div class="panel-body">
                    <ul class="list-group">
                        @foreach ($addresses as $address)
                            <li class="list-group-item">
                                {{ $address->line1 }}</a> <strong>{{ $address->created_at->diffForHumans() }}</strong> <hr>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
