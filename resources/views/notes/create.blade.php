@extends('layout')

@section('tilte')
Create Note
@endsection

@section('content')

  @if($errors->any())

   <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <p>{{$error}}</p>
    @endforeach
   </div>

   @endif

<form method="POST" action="{{ route('notes.store') }}" >
    @csrf
    <div class="form-group mb-3">
      <textarea name="content" rows="3" class="form-control"  placeholder="content" value="{{old('content')}}"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Create</button>
  </form>

@endsection

