<header>
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600 shadow-lg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <img src="{{asset('assets/images/logoRekonser.png')}}" class="h-12 flex items-center space-x-3 rtl:space-x-reverse" alt="Rekonser logo">
            <div class="flex md:order-2 space-x-3 md:space-x-1 rtl:space-x-reverse">
                <a href="{{route('register')}}"
                    class="bg-white ring-1 ring-[#002B43] text-[#002B43] hover:text-white hover:bg-[#004870] focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm px-8 py-2 text-center dark:bg-blue-600 dark:hover:bg-[#004870] dark:focus:ring-blue-800">Daftar</a>
                <a href="{{route('login')}}"
                    class="text-white ring-1 bg-[#002B43] hover:bg-[#004870] focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm px-8 py-2 text-center dark:bg-blue-600 dark:hover:bg-[#003552] dark:focus:ring-blue-800">Masuk</a>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-semibold text-[20px] border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{route('landing')}}"
                            class="block py-2 px-3 text-white bg-[#002B43] rounded md:bg-transparent md:text-[#002B43] md:p-0 md:dark:text-blue-500 hover:text-[#0067A0]"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="{{route('listProducts')}}"
                            class="block py-2 px-3 text-white bg-[#002B43] rounded md:bg-transparent md:text-[#002B43] md:p-0 md:dark:text-blue-500 hover:text-[#0067A0]">Produk</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-[#002B43] rounded md:bg-transparent md:text-[#002B43] md:p-0 md:dark:text-blue-500 hover:text-[#0067A0]">Penyewaan</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-[#002B43] rounded md:bg-transparent md:text-[#002B43] md:p-0 md:dark:text-blue-500 hover:text-[#0067A0]">Pengembalian</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
