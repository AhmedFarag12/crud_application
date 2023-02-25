@extends('layout')

@section('tilte')
Create Book
@endsection

@section('content')

  @if($errors->any())

   <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <p>{{$error}}</p>
    @endforeach
   </div>

   @endif

  <form method="POST" action="{{ route('books.store')}}" enctype="multipart/form-data">
      @csrf

      <div class="form-group mb-3">
        <input type="texts" name="title" class="form-control"  placeholder="Title" value="{{old('title')}}">
      </div>
    
      <div class="form-group">
          <textarea  name="desc" class="form-control" placeholder="Description"   value="{{old('desc')}}"></textarea>
      </div>

      <div class="form-group">
        <input type="file" name="img" class="form-control-file" >
     </div>

      @foreach ($categories as $category)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="category_ids[]" value="{{$category->id}}" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              {{$category->name}}
            </label>
        </div>  
      @endforeach
  
      <button type="submit" class="btn btn-primary">Create</button>

    </form>

@endsection

