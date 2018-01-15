@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Addresses</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($addresses as $address)
                            <li class="list-group-item">
                                {{ $address->line1 }} <strong class="text-right">{{ $address->created_at->diffForHumans() }}</strong> <hr>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
