@extends('layouts.app')

@section('content')
    <h3>id author <span class="badge bg-secondary">{{$video->user_id}}</span></h3>
    <div class="card" style="width: 38rem;">
        {!! $video->content !!}
        <div class="card-body">
            <h5 class="card-title">  {{$video->title}}</h5>
            <p class="card-text">  {{$video->description}}</p>
        </div>
    </div>
    <form action="{{route('destroyVideo', $video->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">delete video</button>
    </form>
@endsection
