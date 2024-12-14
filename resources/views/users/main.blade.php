<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @if (Route::currentRouteName() == 'landing')
            Landing Page
        @elseif (Route::currentRouteName() == 'login')
            login Page
        @elseif (Route::currentRouteName() == 'indexRegister')
            Register Page
        @elseif (Route::currentRouteName() == 'products')
            Product Page
        @elseif (Route::currentRouteName() == 'detailProduct')
            Detail Product Page
        @elseif (Route::currentRouteName() == 'transaction.index')
            Transaction Page
        @elseif (Route::currentRouteName() == 'profile')
            Profile Page
        @elseif (Route::currentRouteName() == 'indexedit')
            Edit Profile Page
        @elseif (Route::currentRouteName() == 'indexorder')
            Order Page
        @elseif (Route::currentRouteName() == 'returns.list')
            Return Page
        @elseif (Route::currentRouteName() == 'returns.index')
            Detail Return Page
        @elseif (Route::currentRouteName() == 'favorites.view')
            Favorite Page
        @elseif (Route::currentRouteName() == 'indexhistorys')
            History Page
        @endif
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="font-['Poppins']">
    @include('components.header')
    <main class="mt-16">
        @yield('container')
    </main>
    @include('components.footer')
</body>

</html>
