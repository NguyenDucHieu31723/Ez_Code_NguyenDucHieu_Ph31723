<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title') - Học lập trình miễn phí</title>
    <!--

Eatery Cafe Template

http://www.templatemo.com/tm-515-eatery

-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="/assets/client/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/client/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/client/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/client/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/client/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/client/assets/css/magnific-popup.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/assets/client/assets/css/style.css">


</head>
<style>

</style>

<body>

    <!-- HEADER -->
    @include('layouts.header')
    <!-- CONTENT -->
    @yield('content')
    <!-- FOOTER -->
    @include('layouts.footer')
    <!-- SCRIPTS -->
    <script src="/assets/client/assets/js/jquery.js"></script>
    <script src="/assets/client/assets/js/bootstrap.min.js"></script>
    <script src="/assets/client/assets/js/jquery.stellar.min.js"></script>
    <script src="/assets/client/assets/js/wow.min.js"></script>
    <script src="/assets/client/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/client/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/client/assets/js/smoothscroll.js"></script>
    <script src="/assets/client/assets/js/custom.js"></script>

</body>

</html>
