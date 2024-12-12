<div class="bg-white shadow-2xl w-screen h-16 flex flex-col justify-center pl-72 ">
    <div class="w-full flex justify-between items-center">
        @if (Route::is('dashboard'))
            <h1 class="text-2xl font-semibold">Dashboard</h1>
        @elseif(Route::is('edit-profile-admin'))
            <h1 class="text-2xl font-semibold">Profil Admin</h1>
        @elseif(Route::is('manage.products'))
            <h1 class="text-2xl font-semibold">Kelola Produk</h1>
        @elseif(Route::is('products.create'))
            <h1 class="text-2xl font-semibold">Tambah Produk</h1>
        @elseif(Route::is('products.edit'))
            <h1 class="text-2xl font-semibold">Edit Produk</h1>
        @elseif(Route::is('users'))
            <h1 class="text-2xl font-semibold">Kelola User</h1>
        @elseif(Route::is('confirm-rent'))
            <h1 class="text-2xl font-semibold">Konfirmasi Penyewaan</h1>
        @elseif(Route::is('confirm-return'))
            <h1 class="text-2xl font-semibold">Konfirmasi Pengembalian</h1>
        @elseif(Route::is('index.proof.return'))
            <h1 class="text-2xl font-semibold">Konfirmasi Pengembalian</h1>
        @endif

        <div class="flex items-center">
            <a href="{{ route('edit-profile-admin', Auth::user()->id) }}" class="flex items-center w-24 h-10 bg-[#002B43] rounded-lg mr-4 text-white hover:bg-[#004870] justify-center">
                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3" />
                    <circle cx="12" cy="10" r="3" />
                    <circle cx="12" cy="12" r="10" />
                </svg>
                Admin
            </a>
        </div>

    </div>
</div>
