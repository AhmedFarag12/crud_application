@extends('layout')

@section('content')
    

    <h1>All Categories</h1>

    <a class="btn btn-primary" href="{{route('categories.create')}}">Create</a>
    @foreach ($categories as $category)
    <hr>

            <a href="{{route('categories.show' , $category->id)}}"><p>{{$category->name}}</p></a>
           

        <a class="btn btn-danger" href="{{route('categories.delete', $category->id)}}">Delete</a>


    @endforeach
    
    {{$categories->render()}}
@endsection
