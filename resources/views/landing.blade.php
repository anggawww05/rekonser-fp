@extends('layouts.main')

@section('container')
    <section id="beranda" class="mb-[60px]">
        <div class="relative h-screen bg-fixed bg-center bg-cover flex items-center justify-center text-center"
            style="background-image: url('{{ asset('assets/images/backgroundMain.jpg') }}')">
            <div class="relative z-10">
                <img src="{{ asset('assets/images/logoRekonserputih.png') }}" class="w-[600px] h-auto mx-auto mb-1   "
                    alt="logo rekonser">
                <p class="mb-8 text-[20px] font-normal text-white sm:px-16 xl:px-48 dark:text-gray-400">Menyediakan berbagai
                    keperluan dan kebutuhan lengkap untuk mendukung kesuksesan acara festival musik, mulai dari peralatan
                    teknis hingga layanan tambahan yang dirancang untuk memberikan pengalaman terbaik bagi penyelenggara dan
                    penonton.</p>
                <div class="flex flex-col mb-8 space-y-4 lg:mb-16 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <a href="{{route('products.index')}}"
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-[#002B43] rounded-lg hover:bg-[#004870] focus:ring-1 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Cari produk
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="absolute w-full h-full bg-gradient-to-t from-[#000000] to-[#000000]/0"></div>
        </div>
    </section>

    <section id="kategori" class="bg-white dark:bg-gray-900 mb-[60px]">
        <div>
            <h1 class="text-center text-[30px] font-bold mb-6">Kategori Produk</h1>
            <div class="flex items-center justify-center">
                <div class="grid grid-cols-4 text-center gap-8">
                    <div class="w-[320px] h-[410px] shadow-2xl rounded-lg">
                        <img src="{{ asset('assets/images/sampleCategory.png') }}" alt="logo kategori" class="w-[300px]">
                        <h1 class="text-center text-[25px] font-bold">Kamera</h1>
                        <a href="#"
                            class="inline-flex items-center justify-center px-5 py-1 text-base font-medium text-center text-white bg-[#002B43] rounded-lg hover:bg-[#004870] focus:ring-1 focus:ring-blue-300 dark:focus:ring-blue-900">
                            <button>Lihat detail</button>
                        </a>
                    </div>
                    <div class="w-[320px] h-[410px] shadow-2xl rounded-lg">
                        <img src="{{ asset('assets/images/sampleCategory.png') }}" alt="logo kategori" class="w-[300px]">
                        <h1 class="text-center text-[25px] font-bold">Kamera</h1>
                        <a href="#"
                            class="inline-flex items-center justify-center px-5 py-1 text-base font-medium text-center text-white bg-[#002B43] rounded-lg hover:bg-[#004870] focus:ring-1 focus:ring-blue-300 dark:focus:ring-blue-900">
                            <button>Lihat detail</button>
                        </a>
                    </div>
                    <div class="w-[320px] h-[410px] shadow-2xl rounded-lg">
                        <img src="{{ asset('assets/images/sampleCategory.png') }}" alt="logo kategori" class="w-[300px]">
                        <h1 class="text-center text-[25px] font-bold">Kamera</h1>
                        <a href="#"
                            class="inline-flex items-center justify-center px-5 py-1 text-base font-medium text-center text-white bg-[#002B43] rounded-lg hover:bg-[#004870] focus:ring-1 focus:ring-blue-300 dark:focus:ring-blue-900">
                            <button>Lihat detail</button>
                        </a>
                    </div>
                    <div class="w-[320px] h-[410px] shadow-2xl rounded-lg">
                        <img src="{{ asset('assets/images/sampleCategory.png') }}" alt="logo kategori" class="w-[300px]">
                        <h1 class="text-center text-[25px] font-bold">Kamera</h1>
                        <a href="#"
                            class="inline-flex items-center justify-center px-5 py-1 text-base font-medium text-center text-white bg-[#002B43] rounded-lg hover:bg-[#004870] focus:ring-1 focus:ring-blue-300 dark:focus:ring-blue-900">
                            <button>Lihat detail</button>
                        </a>
                    </div>
                    <div class="w-[320px] h-[410px] shadow-2xl rounded-lg">
                        <img src="{{ asset('assets/images/sampleCategory.png') }}" alt="logo kategori" class="w-[300px]">
                        <h1 class="text-center text-[25px] font-bold">Kamera</h1>
                        <a href="#"
                            class="inline-flex items-center justify-center px-5 py-1 text-base font-medium text-center text-white bg-[#002B43] rounded-lg hover:bg-[#004870] focus:ring-1 focus:ring-blue-300 dark:focus:ring-blue-900">
                            <button>Lihat detail</button>
                        </a>
                    </div>
                    <div class="w-[320px] h-[410px] shadow-2xl rounded-lg">
                        <img src="{{ asset('assets/images/sampleCategory.png') }}" alt="logo kategori" class="w-[300px]">
                        <h1 class="text-center text-[25px] font-bold">Kamera</h1>
                        <a href="#"
                            class="inline-flex items-center justify-center px-5 py-1 text-base font-medium text-center text-white bg-[#002B43] rounded-lg hover:bg-[#004870] focus:ring-1 focus:ring-blue-300 dark:focus:ring-blue-900">
                            <button>Lihat detail</button>
                        </a>
                    </div>
                    <div class="w-[320px] h-[410px] shadow-2xl rounded-lg">
                        <img src="{{ asset('assets/images/sampleCategory.png') }}" alt="logo kategori" class="w-[300px]">
                        <h1 class="text-center text-[25px] font-bold">Kamera</h1>
                        <a href="#"
                            class="inline-flex items-center justify-center px-5 py-1 text-base font-medium text-center text-white bg-[#002B43] rounded-lg hover:bg-[#004870] focus:ring-1 focus:ring-blue-300 dark:focus:ring-blue-900">
                            <button>Lihat detail</button>
                        </a>
                    </div>
                    <div class="w-[320px] h-[410px] shadow-2xl rounded-lg">
                        <img src="{{ asset('assets/images/sampleCategory.png') }}" alt="logo kategori" class="w-[300px]">
                        <h1 class="text-center text-[25px] font-bold">Kamera</h1>
                        <a href="#"
                            class="inline-flex items-center justify-center px-5 py-1 text-base font-medium text-center text-white bg-[#002B43] rounded-lg hover:bg-[#004870] focus:ring-1 focus:ring-blue-300 dark:focus:ring-blue-900">
                            <button>Lihat detail</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentangKami" class="bg-white dark:bg-gray-900">
        <div class="relative h-screen bg-fixed bg-center bg-cover flex items-center justify-center text-center"
            style="background-image: url('{{ asset('assets/images/backgroundMain.jpg') }}');">
            <div class="relative z-10">
                <h1 class="text-center text-[60px] font-bold text-white mb-4">Tentang Kami</h1>
                <p class="mb-8 text-[14px] font-normal text-white sm:px-16 xl:px-48 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, sed ullam harum reiciendis quas reprehenderit odio porro corrupti repellendus accusamus esse non eos placeat quasi voluptatem id hic excepturi culpa numquam sapiente cum voluptate libero? Perferendis magnam, explicabo consequatur alias possimus eligendi unde quo, praesentium non animi ipsum facilis qui consequuntur. Quisquam cupiditate placeat unde impedit voluptate reiciendis ratione accusantium quae repellendus beatae cumque at ea earum nemo molestias rem sunt sequi, vero odio perferendis sint corporis nisi! Culpa rerum iusto quasi corrupti perspiciatis deserunt nisi, quo perferendis labore ab architecto corporis molestias praesentium quidem, reiciendis autem temporibus sed ducimus? Veniam, nam maxime quam repellendus nihil minima. Enim minus, amet ipsam ullam adipisci magni tenetur eaque. Quasi molestias autem aut inventore? Dicta ullam aut pariatur eligendi itaque modi aliquam dolore repudiandae quod quae molestiae eaque obcaecati, eos explicabo ratione incidunt atque debitis sint. Est, in deleniti hic ipsa dicta eos tempore a, dolore accusamus atque vitae, porro tempora praesentium sequi ea nam dolorum modi magnam distinctio debitis quos expedita ratione. Labore, vel. Ullam quam culpa accusamus? Voluptates est possimus modi at rerum enim ab cumque, libero voluptatem quod dignissimos laboriosam minus architecto minima atque quia dolorum ullam aspernatur culpa rem, dicta maxime incidunt distinctio quisquam? Laboriosam optio dolore incidunt facilis, voluptate ea autem id totam culpa accusamus reprehenderit ab excepturi voluptatem, quod veritatis nemo! Culpa mollitia, ut quidem doloribus provident expedita dignissimos praesentium odit ipsa tempore fuga eum minus eaque officia.</p>
                <div class="flex flex-col mb-8 space-y-4 lg:mb-16 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                </div>
            </div>
            <div class="absolute w-full h-full bg-gradient-to-t from-[#000000] to-[#000000]/0"></div>
        </div>
    </section>

    <section id="kategori" class="bg-white dark:bg-gray-900 mb-[60px]">
    </section>
@endsection
