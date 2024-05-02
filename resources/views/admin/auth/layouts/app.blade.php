<!DOCTYPE html>
<html lang="en" data-sidebar-color="light" data-topbar-color="light" data-sidebar-view="default">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="MyraStudio" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico.png">

    <!-- App css -->
    <link href="{{asset('app/css/theme.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app/libs/@iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet">

    <!-- Head Js -->
    <script src="{{asset('app/js/head.js')}}"></script>
</head>

@yield('content')

</html>