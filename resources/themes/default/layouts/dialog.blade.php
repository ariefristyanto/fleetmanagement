<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>InfiniteNext | {{ $page_title or "Page Title" }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css",env('SSL',false)) }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css",env('SSL',false)) }}" rel="stylesheet" type="text/css" />

</head>
<body class="login-page">

<div class="box-body">
    @include('flash::message')
    @include('partials._errors')
</div>

<div class="login-box">
    <div class="login-logo">
        InfiniteNext | {{ $page_title or "Page Title" }}
    </div><!-- /.login-logo -->
    <div class="login-box-body">

        <!-- Your Page Content Here -->
        @yield('content')

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset("/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js",env('SSL',false)) }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js",env('SSL',false)) }}" type="text/javascript"></script>
</body>
</html>
