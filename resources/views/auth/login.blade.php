@extends('layout')

@section('tilte')
Login 
@endsection

@section('content')

  @if($errors->any())

   <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <p>{{$error}}</p>
    @endforeach
   </div>

   @endif

<form method="POST" action="{{ route('auth.handlelogin') }}" >
    @csrf
 

    <div class="form-group mb-3">
        <input type="text" name="email" class="form-control"  placeholder="email" value="{{old('email')}}">
      </div>

      <div class="form-group mb-3">
        <input type="password" name="password" class="form-control"  placeholder="password" value="{{old('password')}}">
      </div>
  

    <button type="submit" class="btn btn-primary">Login</button>
  </form>

  <a href="{{route('auth.github.redirect')}}" type="submit" class="btn btn-success">Sign up with Github</a>


@endsection

