
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ config('app.name') }}</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets2/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets2/css/style.css">
  <link rel="stylesheet" href="assets2/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets2/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets2/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      @include('navigation-menu')
      @include('slider')