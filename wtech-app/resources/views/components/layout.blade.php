<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title ?? 'BombaShop' }}</title>

    <!--Required-meta-tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!--Custom-CSS-->
    {{ $styles ?? '' }}
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components.css') }}" rel="stylesheet">

    <!--Favicons-made-with-realfavicongenerator.net-->
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../images/favicons/site.webmanifest">
    <link rel="mask-icon" href="../images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>


<body>
    <!--HEADER-->
    <x-layout-header></x-layout-header>

    <!--SLOT FOR MAIN-->
    {{ $slot }}

    <!--FOOTER-->
    <x-layout-footer></x-layout-footer>

    <!--@//yield('content')-->
    <script type="text/javascript" src="../libs/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>