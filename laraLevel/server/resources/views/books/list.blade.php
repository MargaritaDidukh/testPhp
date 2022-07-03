<html>
 <head>
     <title>title</title>
     <style>
         .italic{
             font-style: italic;
         }
         .bold{
             font-weight: bold;
         }
         .cl-red{
             color: red;
         }
     </style>
 </head>
<body>
{{--@include('errors')--}}
{{--<x-alert  :message="$errorsMy" class="italic"/>--}}
{{--<x-alert type="error" :message="$errorsMy" class="bold"/>--}}
<x-alert type="error"  class="bold">
    <x-slot name="typeError">Fatal</x-slot>

</x-alert>
<ul>
    @each('books.list-item', $books, 'book')
{{--    @foreach($books as $id=>$book)--}}
{{--    <li>--}}
{{--        @if($loop->even)--}}
{{--        <a href="{{route('books.view', ['id', $id])}}" style="color: burlywood">{{$book['title']}}</a>--}}
{{--        @else--}}
{{--            <a href="{{route('books.view', ['id', $id])}}" >{{$book['title']}}</a>--}}
{{--        @endif--}}
{{--    </li>--}}
{{--    @endforeach--}}
</ul>

</body>
</html>
