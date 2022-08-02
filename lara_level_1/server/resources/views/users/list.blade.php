@extends('layouts.app')

@section('content')
    <h2>Перелік користувачей </h2>
    <ul class="list-group">
        @foreach($users as $user)
        <li class="list-group-item">
            {{$user->first_name}}
            {{$user->last_name}}
            <span class="fw-bold">{{$user->mobile}}</span>
            <span class="fw-semibold">{{$user->email}}</span>
        </li>
        @endforeach
    </ul>
@endsection
