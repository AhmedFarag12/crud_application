@extends('layout')

@section('tilte')
Create Category
@endsection

@section('content')

  @if($errors->any())

   <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <p>{{$error}}</p>
    @endforeach
   </div>

   @endif

<form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
      <input type="texts" name="name" class="form-control"  placeholder="name" value="{{old('name')}}">
    </div>
   

    <button type="submit" class="btn btn-primary">Create</button>
  </form>

@endsection

