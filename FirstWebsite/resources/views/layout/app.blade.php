<!DOCTYPE html>
<html lang="en">
<head>
    
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/custom.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">



</head>
<body>
@include('layout.menu')



@yield('content')




@include('layout.footer')
<script src="{{asset('js/jquery-3.6.0.slim.min.js')}}"></script>  
<script src="{{asset('js/bootstrap.min.js')}}"></script>  
<script src="{{asset('js/proper.min.js')}}"></script>  
<script src="{{asset('js/custom.js')}}"></script>  


</body>

</html>