<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @if (Route::currentRouteName() == 'dashboard')
            ReKonser - Dashboard
        @elseif (Route::currentRouteName() == 'edit-profile-admin')
            ReKonser - Profil Admin
        @elseif (Route::currentRouteName() == 'manage.products')
            ReKonser - Kelola Produk
        @elseif (Route::currentRouteName() == 'products.create')
            ReKonser - Kelola Produk
        @elseif (Route::currentRouteName() == 'products.edit')
            ReKonser - Kelola Produk
        @elseif (Route::currentRouteName() == 'users')
            ReKonser - Kelola Pengguna
        @elseif (Route::currentRouteName() == 'users.edit')
            ReKonser - Kelola Pengguna
        @elseif (Route::currentRouteName() == 'users.detail')
            ReKonser - Kelola Pengguna
        @elseif (Route::currentRouteName() == 'confirm-rent')
            ReKonser - Konfirmasi
        @elseif (Route::currentRouteName() == 'index.proof.rent')
            ReKonser - Konfirmasi
        @elseif (Route::currentRouteName() == 'confirm-return')
            ReKonser - Konfirmasi
        @elseif (Route::currentRouteName() == 'index.proof.return')
            ReKonser - Konfirmasi
        @elseif (Route::currentRouteName() == 'history')
            ReKonser - Riwayat
        @endif
    </title>
    <link rel="icon" href="{{ asset('assets/images/icontitle.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body class="font-['Poppins']">
    @include('components.aside')
    @include('components.topbar')
    <main>
        @yield('container')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>
