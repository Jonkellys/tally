<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <title>{{ $pageTitle }}</title>
    @vite('resources/css/app.css')
</head>

<body>

    @guest
        @yield('content')
    @endguest

</body>

</html>
