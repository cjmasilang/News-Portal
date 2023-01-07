<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="News Portal">
    <meta name="keywords" content="">
    <meta name="author" content="cjmm">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token"  {{ csrf_token() }}>
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link href="{{ asset('public/adminpanel/assets/img/vbi-icon.ico') }}"rel="icon">
    <link href="{{ asset('public/adminpanel/assets/img/logo.png') }}"rel="vbi logo">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/adminpanel/assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('public/adminpanel/assets/css/font-awesome.min.css') }}">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('public/adminpanel/assets/css/line-awesome.min.css') }}">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ asset('public/adminpanel/assets/css/dataTables.bootstrap4.min.css') }}">

    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{ asset('public/adminpanel/assets/plugins/morris/morris.css') }}">

    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/sweetalert.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('public/adminpanel/assets/css/style.css') }}">




</head>
