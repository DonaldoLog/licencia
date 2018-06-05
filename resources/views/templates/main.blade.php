<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title> Licencia</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/awesome/css/font-awesome.min.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
    @routes
</head>

<body>
    @yield('content')
</body>
<script src="{{ asset('js/jquery-3.2.1.js')}}" ></script>
 <script src="{{ asset('js/popper.min.js')}}" ></script>
 <script src="{{ asset('js/bootstrap.min.js')}}" ></script>
@stack('scripts')
</html>
