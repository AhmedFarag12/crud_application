@extends('layout')

@section('content') 

    <input type="text" id="keyword">

    @auth
        @foreach (Auth::user()->notes as $note)
            <p>{{$note->content}}</p>
        @endforeach

        <a href="{{route('notes.create')}}" class="btn btn-info">Add New Note</a>
    @endauth

    <h1>All Books</h1>
        @auth
        <a class="btn btn-primary" href="{{route('books.create')}}">Create</a>

        @endauth

    @foreach ($books as $book)
    <hr>

            <a href="{{route('books.show' , $book->id)}}"><p>{{$book->title}}</p></a>
            <p>{{$book->desc}}</p>
            {{-- <p>{{$book->img}}</p> --}}

            @auth
            <a class="btn btn-danger" href="{{route('books.delete', $book->id)}}">Delete</a>

            @endauth


    @endforeach
    
    {{-- {{$books->render()}} --}}
@endsection


@section('scripts')
    <script>

        $('#keyword').keyup(function(){
            let keyword = $(this).val()
            // console.log(keyword);
        })
    </script>
@endsection