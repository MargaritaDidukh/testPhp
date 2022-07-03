<div>
    @if($isError())
  <p {{$attributes->merge(['class' => 'cl-red'])}} >{{ $slot }}</p>
        <span>{{$typeError}}</span>
    @else
        <p class="italic">{{ $slot }}</p>
        <span>{{$typeError}}</span>
  @endif

</div>
