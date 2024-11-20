<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @include('partials.header')
    <main class="mt-16">
        @yield('container')
    </main>
    @include('partials.footer')
</body>

</html>
