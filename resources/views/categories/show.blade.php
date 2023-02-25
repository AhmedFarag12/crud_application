@extends('layout')


@section('content')
    <h1>Category ID : {{$category->id}}</h1>
<h3>{{$category->name}}</h3>
<hr>


<ul>

    @foreach ($category->books as $book)
      <li>{{$book->title}}</li>
    @endforeach
</ul>

<a href="{{route('categories.index')}}">Back</a>

@endsection
    
