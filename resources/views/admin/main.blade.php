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

</head>

<body class="">
    @include('components.aside')
    @include('components.topbar')
    <main>
        @yield('container')
    </main>

</body>

</html>
