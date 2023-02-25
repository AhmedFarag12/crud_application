@extends('layout')


@section('content')
    <h1>Book ID : {{$book->id}}</h1>
    <h3>{{$book->title}}</h3>
    <h3>{{$book->desc}}</h3>

<ul>

    @foreach($book->categories as $category)
      <li>{{$category->name}}</li>
    @endforeach
</ul>



<hr>



<a href="{{route('books.index')}}">Back</a>

@endsection
    
