@extends('layouts.app')

@section('content')
{{--    <form method="post" >--}}
{{--        @csrf @method('DELETE')--}}
{{--        <div class="form-group">--}}
{{--            <label for="numberId">video id</label>--}}
{{--            <input type="number" class="form-control" id="numberId" placeholder="video id">--}}
{{--        </div>--}}
{{--        <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--    </form>--}}

    @foreach($videos as $video)
<div class="card" style="width: 38rem;">
    {!! $video->content !!}
    <div class="card-body">
        <h5 class="card-title">  {{$video->title}}</h5>
        <p class="card-text">  {{$video->description}}</p>
    </div>
</div>
<a href="{{route('editVideo', $video->id)}}" class="btn  btn-warning">update video</a>
<a href="{{route('showByIdVideo', $video->id)}}" class="btn btn-primary">page of video</a>
<br> <br>

@endforeach
@endsection
