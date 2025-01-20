<header>
    <nav
        class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600 shadow-lg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <img src="{{ asset('assets/images/logoRekonser.png') }}"
                class="h-12 flex items-center space-x-3 rtl:space-x-reverse" alt="Rekonser logo">
            <div class="flex flex-row justify-end md:order-2 space-x-3 md:space-x-1 rtl:space-x-reverse ">
                @if (!auth()->user())
                <a href="{{ route('indexRegister') }}"
                    class="bg-white ring-1 ring-[#002B43] text-[#002B43] hover:text-white hover:bg-[#004870] focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm px-8 py-2 text-center">Daftar</a>
                <a href="{{ route('login') }}"
                    class="text-white ring-1 ring-[#002B43] bg-[#002B43] hover:bg-[#004870] font-semibold rounded-lg text-sm px-8 py-2 text-center">Masuk</a>
                @else
                <div class="flex md:order-2 space-x-3 md:space-x-1 rtl:space-x-reverse">
                    <a href="{{route('profile')}}"
                    class="text-white ring-1 bg-[#002B43] hover:bg-[#004870] font-semibold rounded-lg text-sm px-4 py-[6px] flex gap-3 items-center">
                    <img src="{{ asset('storage/' . auth()->user()->picture_profile) }}" alt="#" class="h-8 w-8 object-cover rounded-full ">Profil</a>
                </div>
                @endif
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-semibold text-[20px] border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ route('landing') }}"
                            class="block py-2 px-3 text-white bg-[#002B43] rounded md:bg-transparent md:text-[#002B43] md:p-0 md:dark:text-blue-500 hover:text-[#0067A0]"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="#kategori"
                            class="block py-2 px-3 text-white bg-[#002B43] rounded md:bg-transparent md:text-[#002B43] md:p-0 md:dark:text-blue-500 hover:text-[#0067A0]">Kategori</a>
                    </li>
                    <li>
                        <a href="#tentangKami"
                            class="block py-2 px-3 text-white bg-[#002B43] rounded md:bg-transparent md:text-[#002B43] md:p-0 md:dark:text-blue-500 hover:text-[#0067A0]">Tentang
                            Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('products') }}"
                            class="block py-2 px-3 text-white bg-[#002B43] rounded md:bg-transparent md:text-[#002B43] md:p-0 md:dark:text-blue-500 hover:text-[#0067A0]">Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

