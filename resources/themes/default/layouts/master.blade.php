<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>InfiniteNext | {{ $page_title or "Page Title" }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Set a meta reference to the CSRF token for use in AJAX request -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css",env('SSL',false)) }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons 4.4.0 -->
    <link href="{{ asset("/bower_components/admin-lte/font-awesome/css/font-awesome.min.css",env('SSL',false)) }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css",env('SSL',false)) }}" rel="stylesheet" type="text/css" />

    <!-- Application CSS-->
    <link href="{{ asset(elixir('css/all.css'),env('SSL',false)) }}" rel="stylesheet" type="text/css" />

    <!-- Head -->
    @include('partials._head')

    <!-- Optional header section  -->
    @yield('head_extra')


  </head>

  <!-- Body -->
  @include('partials._body')

</html>
