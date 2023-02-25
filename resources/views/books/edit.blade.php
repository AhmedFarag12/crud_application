@extends('layout')

@section('tilte')
Edit Book - {{$book->title}}
@endsection

@section('content')
    
@if($errors->any())
<div class="alert alert-danger">
 @foreach($errors->all() as $error)
   <p>{{$error}}</p>
 @endforeach
</div>
@endif

<form method="POST" action="{{route('books.update' , $book->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
      <input type="texts" name="title" class="form-control"  placeholder="Title" value="{{ old('title') ??$book->title}}">
    </div>
   
    <div class="form-group">

        <textarea  name="desc" class="form-control" placeholder="Description">{{ old('desc') ?? $book->desc}}</textarea>
    </div>
    <div class="form-group">

      <input type="file" name="img" class="form-control-file" >
  </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>

@endsection

