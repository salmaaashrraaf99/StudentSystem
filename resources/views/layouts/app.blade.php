<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/app.css') }}" rel="stylesheet">

      <!-- Bootstrap core CSS -->
  <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('asset/css//added_style.css')}}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
         <example-component></example-component>
    </div>
    <script src="{{asset('js/app.js')}}"></script>

    <!--modals-->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('asset/js/jquery.min.js')}}"></script>
  <script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
<script>
  $(document).ready(function(){
    $('.switch-tologin-modal').on('click',function(){
      $('#register-modal').modal('hide');
      $('#login-modal').modal('show');
    })
    $('.switch-toregister-modal').on('click',function(){
      $('#login-modal').modal('hide');
      $('#register-modal').modal('show');
    })
  })
</script>

</body>
</html>
