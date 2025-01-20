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
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-[#002B43] rounded-lg hover:bg-[#004870] focus:ring-1 focus:ring-blue-300"
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

    <section id="kategori" class="bg-white mt-44">
        <div class="flex flex-col items-center mx-24 mb-28">
            <h1 class="text-[36px] font-bold mb-20 text-[#002B43]" data-aos="flip-left">Kategori Produk</h1>
            <div class="flex items-center justify-center">
                <div class="grid grid-cols-4 text-center gap-8 mx-2">
                    <div data-aos="fade-up">
                        <img src="{{ asset('assets/images/kategori1.png') }}" class="w-28 h-28 mx-auto mb-2"
                            alt="Sound System">
                        <h2 class="text-2xl font-semibold text-[#002B43]">Multimedia</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Peralatan multimedia yang dapat mendukung dalam
                            bentuk dokumentasi atau teknologi</p>
                    </div>
                    <div data-aos="fade-up">
                        <img src="{{ asset('assets/images/kategori2.png') }}" class="w-28 h-28 mx-auto mb-2" alt="Lighting">
                        <h2 class="text-2xl font-semibold text-[#002B43]">Alat Musik</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Berbagai alat musik tersedia yang dapat
                            mendukung acara</p>
                    </div>
                    <div data-aos="fade-up">
                        <img src="{{ asset('assets/images/kategori3.png') }}" class="w-28 h-28 mx-auto mb-2" alt="Stage">
                        <h2 class="text-2xl font-semibold text-[#002B43]">Audio</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Audio yang mendukung suasana acara konser</p>
                    </div>
                    <div data-aos="fade-up">
                        <img src="{{ asset('assets/images/kategori4.png') }}" class="w-28 h-28 mx-auto mb-2" alt="Tent">
                        <h2 class="text-2xl font-semibold text-[#002B43]">Alat Panggung</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Panggung dan alat lain yang kokoh dan aman untuk
                            penampilan yang spektakuler</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentangKami" class="bg-[#002B43] rounded-3xl w-[1400px] h-auto mx-auto shadow-lg mt-40 mb-20 p-10"
        data-aos="fade-up">
        <div class="flex flex-col lg:flex-row justify-center items-center gap-10">
            <img src="{{ asset('assets/images/bgAU.PNG') }}" alt="Tentang Kami" class="w-[420px] mb-5">
            <div class="flex flex-col gap-4">
                <div class="text-white font-bold text-[44px]">ReKonser</div>
                <div class="text-justify text-[18px] text-white">
                    ReKonser, platform terpercaya untuk kebutuhan sewa alat-alat konser Anda. Kami hadir untuk mendukung
                    acara musik, pertunjukan seni, atau event spesial Anda dengan menyediakan perlengkapan konser
                    berkualitas tinggi. Di ReKonser, kami memahami pentingnya performa sempurna dalam setiap acara. Oleh
                    karena itu, kami menawarkan beragam alat seperti sistem audio, pencahayaan profesional, instrumen
                    musik, hingga perlengkapan panggung. Kami bangga menjadi mitra yang dapat diandalkan bagi musisi,
                    penyelenggara acara, dan komunitas kreatif dalam mewujudkan pengalaman konser terbaik. Dengan
                    layanan mudah, harga terjangkau, dan dukungan teknis, kami memastikan kebutuhan Anda terpenuhi
                    dengan optimal.
                </div>
                <div class="mt-4 text-[20px] italic text-[#FFDC5F]">ReKonser – Sewa peralatan konser, mudah dan
                    terpercaya.
                </div>
            </div>
        </div>
    </section>

    <section id="benefit" class="bg-white mb-32">
        <div class="flex flex-col items-center mx-24">
            <h1 class="text-[36px] font-bold mb-10 text-[#002B43]" data-aos="flip-left">Kenapa harus kami?</h1>
            <div class="flex items-center justify-center">
                <div class="grid grid-cols-4 text-center gap-8 mx-2">
                    <div data-aos="fade-up">
                        <svg class="w-28 h-28 mx-auto mb-2" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                fill="#002B43" />
                            <path
                                d="M12 6.5c-3.03 0-5.5 2.47-5.5 5.5s2.47 5.5 5.5 5.5 5.5-2.47 5.5-5.5-2.47-5.5-5.5-5.5zm0 9c-1.93 0-3.5-1.57-3.5-3.5S10.07 8.5 12 8.5s3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"
                                fill="#FFDC5F" />
                        </svg>
                        <h2 class="text-2xl font-semibold text-[#002B43]">Harga Terjangkau</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Kami menawarkan harga yang kompetitif dan
                            terjangkau untuk semua kebutuhan konser Anda.</p>
                    </div>
                    <div data-aos="fade-up">
                        <svg class="w-28 h-28 mx-auto mb-2" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                fill="#002B43" />
                            <path
                                d="M12 6.5c-3.03 0-5.5 2.47-5.5 5.5s2.47 5.5 5.5 5.5 5.5-2.47 5.5-5.5-2.47-5.5-5.5-5.5zm0 9c-1.93 0-3.5-1.57-3.5-3.5S10.07 8.5 12 8.5s3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"
                                fill="#FFDC5F" />
                        </svg>
                        <h2 class="text-2xl font-semibold text-[#002B43]">Kualitas Terbaik</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Peralatan yang kami sediakan memiliki kualitas
                            terbaik untuk memastikan acara Anda berjalan lancar.</p>
                    </div>
                    <div data-aos="fade-up">
                        <svg class="w-28 h-28 mx-auto mb-2" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                fill="#002B43" />
                            <path
                                d="M12 6.5c-3.03 0-5.5 2.47-5.5 5.5s2.47 5.5 5.5 5.5 5.5-2.47 5.5-5.5-2.47-5.5-5.5-5.5zm0 9c-1.93 0-3.5-1.57-3.5-3.5S10.07 8.5 12 8.5s3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"
                                fill="#FFDC5F" />
                        </svg>
                        <h2 class="text-2xl font-semibold text-[#002B43]">Layanan Profesional</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Tim kami siap memberikan layanan profesional dan
                            dukungan teknis selama acara berlangsung.</p>
                    </div>
                    <div data-aos="fade-up">
                        <svg class="w-28 h-28 mx-auto mb-2" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                fill="#002B43" />
                            <path
                                d="M12 6.5c-3.03 0-5.5 2.47-5.5 5.5s2.47 5.5 5.5 5.5 5.5-2.47 5.5-5.5-2.47-5.5-5.5-5.5zm0 9c-1.93 0-3.5-1.57-3.5-3.5S10.07 8.5 12 8.5s3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"
                                fill="#FFDC5F" />
                        </svg>
                        <h2 class="text-2xl font-semibold text-[#002B43]">Pengalaman Terpercaya</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Kami memiliki pengalaman yang luas dalam
                            mendukung berbagai acara musik dan seni.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        AOS.init();
    </script>
@endsection
