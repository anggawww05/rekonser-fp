@extends('users.main')

@section('container')
    <section id="beranda" class="mb-[60px]">
        <div class="relative h-screen bg-fixed bg-center bg-cover flex items-center justify-center text-center"
            style="background-image: url('{{ asset('assets/images/backgroundMain.jpg') }}')">
            <div class="relative z-10">
                <img src="{{ asset('assets/images/logoRekonserputih.png') }}" class="w-[600px] h-auto mx-auto mb-1"
                    data-aos="fade-up" alt="logo rekonser">
                <p class="mb-8 text-[20px] font-normal text-white sm:px-16 xl:px-48 dark:text-gray-400" data-aos="fade-up">
                    Menyediakan berbagai
                    keperluan dan kebutuhan lengkap untuk mendukung kesuksesan acara festival musik, mulai dari peralatan
                    teknis hingga layanan tambahan yang dirancang untuk memberikan pengalaman terbaik bagi penyelenggara dan
                    penonton.</p>
                <div class="flex flex-col mb-8 space-y-4 lg:mb-16 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4"
                    data-aos="fade-up">
                    <a href="{{ route('products') }}"
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-[#002B43] rounded-lg hover:bg-[#004870] focus:ring-1 focus:ring-blue-300 dark:focus:ring-blue-900"
                        data-aos="fade-up">
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
        <div class="h-screen flex flex-col items-center">
            <h1 class="text-[40px] font-bold mb-2 text-[#002B43]" data-aos="flip-left">Kategori Produk</h1>
            <hr class="w-96 border-1 mb-24">
            <div class="flex items-center justify-center">
                <div class="grid grid-cols-4 text-center gap-8">
                    <div data-aos="fade-up">
                        <img src="{{ asset('assets/images/kategori1.png') }}" class="w-28 h-28 mx-auto mb-2"
                            alt="Sound System">
                        <h2 class="text-2xl font-semibold text-[#002B43]">Multimedia</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Peralatan audio berkualitas tinggi untuk acara
                            musik Anda.</p>
                    </div>
                    <div data-aos="fade-up">
                        <img src="{{ asset('assets/images/kategori2.png') }}" class="w-28 h-28 mx-auto mb-2" alt="Lighting">
                        <h2 class="text-2xl font-semibold text-[#002B43]">Alat Musik</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Sistem pencahayaan profesional untuk menciptakan
                            suasana yang tepat.</p>
                    </div>
                    <div data-aos="fade-up">
                        <img src="{{ asset('assets/images/kategori3.png') }}" class="w-28 h-28 mx-auto mb-2" alt="Stage">
                        <h2 class="text-2xl font-semibold text-[#002B43]">Audio</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Panggung yang kokoh dan aman untuk penampilan
                            yang spektakuler.</p>
                    </div>
                    <div data-aos="fade-up">
                        <img src="{{ asset('assets/images/kategori4.png') }}" class="w-28 h-28 mx-auto mb-2" alt="Tent">
                        <h2 class="text-2xl font-semibold text-[#002B43]">Alat Panggung</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Tenda berkualitas untuk melindungi acara Anda
                            dari cuaca.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentangKami" class="bg-white dark:bg-gray-900">
        <div class="relative h-[500px] bg-fixed bg-center bg-cover flex items-center justify-center text-center"
            style="background-image: url('{{ asset('assets/images/bgTentangKami.jpg') }}');">
            <div class="relative z-10">
                <div class="text-center flex flex-col items-center">
                    <h1 class=" text-[40px] font-bold text-white">Tentang Kami</h1>
                    <hr class="border-white w-96 mb-6">
                    <p class="mb-8 text-[18px] font-normal text-white sm:px-16 xl:px-48 dark:text-gray-400">Selamat datang
                        di
                        ReKonser, platform terpercaya untuk kebutuhan sewa alat-alat konser Anda. Kami hadir untuk mendukung
                        acara musik, pertunjukan seni, atau event spesial Anda dengan menyediakan perlengkapan konser
                        berkualitas tinggi. Di ReKonser, kami memahami pentingnya performa sempurna dalam setiap acara. Oleh
                        karena itu, kami menawarkan beragam alat seperti sistem audio, pencahayaan profesional, instrumen
                        musik,
                        hingga
                        perlengkapan panggung. Kami bangga menjadi mitra yang dapat diandalkan bagi musisi, penyelenggara
                        acara,
                        dan komunitas kreatif dalam mewujudkan pengalaman konser terbaik. Dengan layanan mudah, harga
                        terjangkau, dan dukungan teknis, kami memastikan kebutuhan Anda terpenuhi dengan optimal. </p>
                    <p class="text-white">ReKonser – Solusi konser, mudah dan terpercaya.</p>
                </div>
            </div>
        </div>
        <div class="h-screen flex flex-row mt-10">'
            <div>
                <div class="text-white text-lg bg-[#002B43] w-full p-3 rounded-lg">
                    Keuntungan sewa di kami?
                </div>
                <div>
                <ul class="list-disc pl-5 mt-3 text-gray-600 dark:text-gray-400">
                    <li class="mb-2">Harga terjangkau dan kompetitif</li>
                    <li class="mb-2">Peralatan berkualitas tinggi dan terawat</li>
                    <li class="mb-2">Dukungan teknis profesional</li>
                    <li class="mb-2">Proses pemesanan yang mudah dan cepat</li>
                    <li class="mb-2">Pengiriman tepat waktu dan aman</li>
                </ul>
                </div>
            </div>

            {{-- <div class="relative h-full w-full bg-fixed bg-center flex items-center justify-center text-center"
                style="background-image: url('{{ asset('assets/images/benefit.jpg') }}');">
                p
            </div> --}}
        </div>
    </section>
    <script>
        AOS.init();
    </script>
@endsection
