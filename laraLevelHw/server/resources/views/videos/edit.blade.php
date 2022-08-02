@extends('layouts.app')

@section('content')
    <form action="{{route('updateVideo', $video->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="input-group input-group-sm mb-3">
            <input name="title" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$video->title}}">
        </div>
        <div class="input-group input-group-sm mb-3">
            <input name="description" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$video->description}}">
        </div>
        <button type="submit" class="btn btn-primary">update video</button>
    </form>
@endsection
