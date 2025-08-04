<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.A.M College of Engineering</title>
    <link href="{{asset('images/web-title-logo.png')}}" rel="icon" />

    <!-- External Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/fastbootstrap.min.css')}}" rel="stylesheet">
    
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/fastbootstrap.min.js')}}"></script>

</head>

<body>
    {{--@section('sidebar')
                    This is the master sidebar.
            @show--}}

    @yield('content')
    
    @extends('includes.footer')
</body>
</html>
