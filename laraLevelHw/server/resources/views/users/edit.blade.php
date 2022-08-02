@extends('layouts.app')

@section('content')
<form action="{{route('updateUser', $user->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="input-group input-group-sm mb-3">
        <input name="username" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$user->username}}">
    </div>
    <div class="input-group input-group-sm mb-3">
        <input name="first_name" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$user->first_name}}">
    </div>
    <div class="input-group input-group-sm mb-3">
        <input name="last_name" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$user->last_name}}">
    </div>
    <div class="input-group input-group-sm mb-3">
        <input  name="email" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$user->email}}">
    </div>
    <div class="input-group input-group-sm mb-3">
        <input name="mobile" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$user->mobile}}">
    </div>
    <button type="submit" class="btn btn-primary">update user</button>
</form>
@endsection
