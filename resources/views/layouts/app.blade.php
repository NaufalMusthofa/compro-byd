<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'BYD')</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 text-gray-800">
    @yield('content')
</body>
</html>