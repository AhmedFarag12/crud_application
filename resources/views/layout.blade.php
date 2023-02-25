<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <title>@yield('title')</title>

    @yield('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link"  href="{{route('books.index')}}">Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('categories.index')}}">Categories</a>
              </li>
           
              
            </ul>

            <ul class="navbar-nav ml-auto">
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{route('auth.register')}}">Rgister</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('auth.login')}}">Login</a>
              </li>
              @endguest
         
              @auth
               <li class="nav-item">
                <a href="#" class="nav-link"> {{Auth::user()->name}}</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('auth.logout')}}">Logout</a>
              </li>
              @endauth
                  
            </ul>
         
          </div>
        </div>
      </nav>
    <div class="container py-5">
        @yield('content')

    </div>



    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    @yield('scripts')

</body>

</html>