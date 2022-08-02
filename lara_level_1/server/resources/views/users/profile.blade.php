@extends('layouts.app')

@section('content')
    <ul class="list-group">
        <li class="list-group-item active" aria-current="true">{{$user->username}}</li>
        <li class="list-group-item">{{$user->first_name}}</li>
        <li class="list-group-item">{{$user->last_name}}</li>
        <li class="list-group-item">{{$user->email}}</li>
        <li class="list-group-item">{{$user->mobile}}</li>
    </ul>
@endsection
