<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <title>
        WebApp
    </title>
    <link href="./build/assets/bootstrap.min.f066aefa.css" rel="stylesheet">
    <script src="./build/assets/bootstrap.bundle.min.77fb9fc3.js" defer></script>
</head>

<body class="bg-light">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
    <!-- Core JS Files -->
</body>

</html>
