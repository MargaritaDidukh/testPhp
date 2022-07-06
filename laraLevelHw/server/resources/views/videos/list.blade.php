@extends('layouts.app')

@section('content')
@foreach($videos as $video)
<div class="card" style="width: 38rem;">
    {!! $video->content !!}
    <div class="card-body">
        <h5 class="card-title">  {{$video->title}}</h5>
        <p class="card-text">  {{$video->description}}</p>
    </div>
</div>
@endforeach
@endsection
