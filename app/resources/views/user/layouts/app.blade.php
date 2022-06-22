<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Kantor Pertanahan Kab.Tanggamus</title>

    <!-- Favicon-->
    <link rel="icon" type="image/png" href="{{ asset('/user/assets/img/logo.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('/user/assets/css/material-kit.css?v=2.0.7') }}" rel="stylesheet" />
    <link href="{{ asset('/user/assets/demo/demo.css') }}" rel="stylesheet" />


    <style type="text/css">
        .padding {
            padding: 15px;
        }

        .padding-right {
            padding-right: 10px;
        }

        .btn-huge {
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 12pt;
            text-transform: uppercase;
            font-weight: bold !important;
            text-shadow: 1px 1px gray;
        }

        .form-control-label {
            text-align: left;
            padding-left: 16px;
            padding-top: 0px;
            font-family: 'Roboto', 'Ubuntu', 'Catamaran', serif;
            font-size: 11pt;
        }

        .btn-file {
            position: relative;
            overflow: hidden;
        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            background: red;
            cursor: inherit;
            display: block;
        }

        .vertical-center {
            margin: 0;
            position: absolute;
            display: block;
            /*width: 100%;*/
            text-align: center;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .form-control.bold {
            font-weight: bold;
        }
    </style>
</head>

<body class="jumbotron index-page sidebar-collapse" style="margin: 0px;">

    @section('header')
        @include('user.layouts.header')
    @show

    @yield('content')

    @section('footer')
        @include('user.layouts.footer')
    @show

</body>

</html>
