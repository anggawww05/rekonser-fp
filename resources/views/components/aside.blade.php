<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-[#002134] dark:bg-gray-800">
        <img src="{{ asset('assets/images/logoRekonserputih.png') }}" class="w-[600px] h-auto mx-auto mb-1"
            alt="logo rekonser">
        <hr class="my-4 border-gray-200 dark:border-gray-700">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center p-2 text-[#DFDFDF] rounded-lg dark:text-white hover:bg-[#025E93] @if(Route::is('dashboard')) bg-[#025E93] @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#ffffff" stroke-width="2" class="size-6">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('manage.products') }}"
                    class="flex items-center p-2 text-[#DFDFDF] rounded-lg dark:text-white hover:bg-[#025E93]
                    @if(Route::is('manage.products')) bg-[#025E93]
                    @elseif (Route::is('products.create')) bg-[#025E93]
                    @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#ffffff" stroke-width="2" class="size-6">
                        <circle cx="10" cy="20.5" r="1" />
                        <circle cx="18" cy="20.5" r="1" />
                        <path d="M2.5 2.5h3l2.7 12.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6l1.6-8.4H7.1" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Kelola Produk</span>
                </a>
            </li>
            <li>
                <a href="{{ route('users') }}"
                    class="flex items-center p-2 text-[#DFDFDF] rounded-lg dark:text-white hover:bg-[#025E93] @if(Route::is('users')) bg-[#025E93] @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#ffffff" stroke-width="2" class="size-6">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Kelola Pengguna</span>
                </a>
            </li>
            <li>
                <a href="{{ route('confirm-rent') }}"
                    class="flex items-center p-2 text-[#DFDFDF] rounded-lg dark:text-white hover:bg-[#025E93]
                    @if(Route::is('confirm-rent')) bg-[#025E93]
                    @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#ffffff" stroke-width="2" class="size-6">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Konfirmasi Sewa</span>
                </a>
            </li>
            <li>
                <a href="{{ route('confirm-return') }}"
                    class="flex items-center p-2 text-[#DFDFDF] rounded-lg dark:text-white hover:bg-[#025E93] @if(Route::is('confirm-return')) bg-[#025E93] @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#ffffff" stroke-width="2" class="size-6">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Konfirmasi Kembali</span>
                </a>
            </li>
            <li>
                <a href="{{ route('history')}}"
                    class="flex items-center p-2 text-[#DFDFDF] rounded-lg dark:text-white hover:bg-[#025E93] @if(Route::is('history')) bg-[#025E93] @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
                        <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Laporan Transaksi</span>
                </a>
            </li>
        </ul>
        <div class="mt-5">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-full px-4 py-2 text-white bg-red-600 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                    Logout
                </button>
            </form>
        </div>
    </div>

</aside>
