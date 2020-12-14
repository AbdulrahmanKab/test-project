<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    @yield('css')
    <title>Test project</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light nav-custom" >
    <a style="color: #ffffff !important;" class="navbar-brand d-flex flex-row mb-0" href="/" > <span class="">Test project</span>      <span class="ml-2  mb-0 smile" ><i class="fas fa-smile"></i></span></a>


</nav>
<main>
@yield('content')
</main>
<footer class="mt-5">
<div class="row d-flex justify-content-center text-light ">
  <div class="mt-2 mb-2">

      &copy; All right reserved
  </div>
</div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/vue.js')}}"></script>
<script src="{{asset('assets/js/axios.min.js')}}"></script>
@yield('js')
</body>
</html>
