@extends('layout')

@section('tilte')
Edit Book - {{$category->name}}
@endsection

@section('content')
    
@if($errors->any())

<div class="alert alert-danger">
 @foreach($errors->all() as $error)
   <p>{{$error}}</p>
 @endforeach
</div>

@endif
<form method="POST" action="{{route('categories.update' , $category->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
      <input type="texts" name="name" class="form-control"  placeholder="name" value="{{ old('name') ??$category->name}}">
    </div>
   
   

    <button type="submit" class="btn btn-primary">Update</button>
  </form>

@endsection

