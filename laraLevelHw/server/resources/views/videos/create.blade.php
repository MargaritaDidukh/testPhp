@extends('layouts.app')
@section('content')
    <form method="post" >
        @csrf @method('put')
        <h3>Створити відео</h3>
        <div class="form-group">
            <label for="title">назва</label>
            <input name="title" type="text" class="form-control"  placeholder="title">
            <label for="description">опис</label>
            <input name="description" type="text" class="form-control" placeholder="description">
            <label for="users">user id</label>
            <select name="users">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
