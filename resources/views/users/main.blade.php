<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @if (Route::currentRouteName() == 'landing')
            ReKonser - Beranda
        @elseif (Route::currentRouteName() == 'login')
            ReKonser - Masuk
        @elseif (Route::currentRouteName() == 'indexRegister')
            ReKonser - Daftar
        @elseif (Route::currentRouteName() == 'products')
            ReKonser - Produk
        @elseif (Route::currentRouteName() == 'detailProduk')
            ReKonser - Produk
        @elseif (Route::currentRouteName() == 'transaction.index')
            ReKonser - Transaksi
        @elseif (Route::currentRouteName() == 'profile')
            ReKonser - Profil
        @elseif (Route::currentRouteName() == 'indexedit')
            ReKonser - Profil
        @elseif (Route::currentRouteName() == 'indexorder')
            ReKonser - Pesanan
        @elseif (Route::currentRouteName() == 'returns.list')
            ReKonser - Pengembalian
        @elseif (Route::currentRouteName() == 'returns.index')
            ReKonser - Pengembalian
        @elseif (Route::currentRouteName() == 'favorites.view')
            ReKonser - Favorit
        @elseif (Route::currentRouteName() == 'indexhistorys')
            ReKonser - Riwayat
        @endif
    </title>
    <link rel="icon" href="{{ asset('assets/images/icontitle.png') }}" type="image/x-icon">
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
