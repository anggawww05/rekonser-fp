@extends('users.main')

@section('container')
    <section id="detail-transaksi" class="bg-gray-100 min-h-screen py-8">
        <div class="max-w-4xl mx-auto space-y-6">
            <!-- Header -->
            <div class="w-[1200px] text-[28px] font-semibold flex items-center gap-4 mb-3">
                <a href="#">
                    <img class="h-6 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                </a>
                <h1>Bukti Transaksi</h1>
            </div>
            <div class="max-w-4xl mx-auto space-y-6">
                <!-- Informasi Pribadi -->
                <div class="border rounded-lg shadow-sm p-4 bg-white">
                    <h2 class="text-lg font-semibold text-gray-700 mb-3">Informasi Pribadi</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                        <div class="flex items-center gap-4 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-12">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div>
                                <p class="text-[20px] font-semibold">Nama</p>
                                <p class="text-[18px]">Gung Angga</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-12">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>

                            <div>
                                <p class="text-[20px] font-semibold">No Telepon</p>
                                <p class="text-[18px]">0821373892</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-16">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <div>
                                <p class="text-[20px] font-semibold">Alamat</p>
                                <p class="text-[16px] leading-6">
                                    Jalan Ken Umang Barat Timur Kaja Kangin Kauh No.60
                                </p>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- Detail Pesanan -->
                <div class="border rounded-lg shadow-sm p-4 bg-white">
                    <h2 class="text-lg font-semibold text-gray-700 mb-3">Detail Pesanan</h2>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm">

                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div>
                                <p class="text-[16px] font-semibold">Produk</p>
                                <p class="text-[14px]">Kamera Sony A6400</p>
                            </div>
                        </div>

                        <!-- Jumlah -->
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>

                            <div>
                                <p class="text-[16px] font-semibold">Jumlah</p>
                                <p class="text-[14px]">3</p>
                            </div>
                        </div>

                        <!-- Durasi Sewa -->
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div>
                                <p class="text-[16px] font-semibold">Durasi Sewa</p>
                                <p class="text-[14px]">4 hari</p>
                            </div>
                        </div>

                        <!-- Harga per hari -->
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>

                            <div>
                                <p class="text-[16px] font-semibold">Harga per hari</p>
                                <p class="text-[14px]">Rp. 90.000</p>
                            </div>
                        </div>


                        <!-- Lama Sewa -->
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div>
                                <p class="text-[16px] font-semibold">Lama Sewa</p>
                                <p class="text-[14px]">11/12/2024 - 15/12/2024</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pengiriman -->
                <div class="flex flex-col gap-4 bg-white p-4 rounded-lg shadow-sm">
                    <h2 class="text-lg font-semibold text-gray-700">Pengiriman</h2>
                    <!-- Antar-Jemput -->
                    <label class="flex items-center justify-between border rounded-lg px-4 py-2 cursor-pointer">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="pengiriman" value="antar-jemput" class="w-4 h-4">
                            <span class="text-sm font-medium">Antar-Jemput</span>
                        </div>
                        <span class="text-sm font-medium">Rp. 100.000</span>
                    </label>
                    <!-- Ambil di Lokasi -->
                    <label class="flex items-center justify-between border rounded-lg px-4 py-2 cursor-pointer">
                        <div class="flex items-center gap-2">
                            <input type="radio" name="pengiriman" value="ambil-lokasi" class="w-4 h-4">
                            <span class="text-sm font-medium">Ambil di lokasi</span>
                        </div>
                        <span class="text-sm font-medium">Rp. 0</span>
                    </label>
                </div>



                <!-- Total Pembayaran -->
                <div class="border rounded-lg shadow-sm p-4 bg-white">
                    <h2 class="text-lg font-semibold text-gray-700 mb-3">Total Pembayaran</h2>
                    <div class="text-sm space-y-2">
                        <div class="flex justify-between">
                            <p class="font-bold">Subtotal Produk</p>
                            <p>Rp. 720.000</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="font-bold">Subtotal Pengiriman</p>
                            <p>Rp. -</p>
                        </div>
                        <hr class="my-2">
                        <div class="flex justify-between text-lg font-bold">
                            <p>Total Pembayaran</p>
                            <p>Rp. 720.000</p>
                        </div>
                    </div>
                </div>

                <!-- Metode Pembayaran -->
                <div class="flex flex-col gap-4 bg-white p-4 rounded-lg shadow-sm">
                    <h2 class="text-lg font-semibold text-gray-700">Metode Pembayaran</h2>
                    <form class="flex flex-col gap-3">
                        <!-- Transfer Bank BCA -->
                        <label class="flex items-center justify-between border rounded-lg px-4 py-3 cursor-pointer">
                            <div class="flex flex-col gap-1">
                                <span class="text-sm font-semibold">Transfer Bank BCA</span>
                                <span class="text-sm text-gray-500">Nomor Rekening: 123456789 (PT. Rekonser)</span>
                            </div>
                            <input type="radio" id="bca" name="payment" value="bca" class="w-5 h-5">
                        </label>

                        <!-- Transfer Bank BNI -->
                        <label class="flex items-center justify-between border rounded-lg px-4 py-3 cursor-pointer">
                            <div class="flex flex-col gap-1">
                                <span class="text-sm font-semibold">Transfer Bank BNI</span>
                                <span class="text-sm text-gray-500">Nomor Rekening: 123456789 (PT. Rekonser)</span>
                            </div>
                            <input type="radio" id="bni" name="payment" value="bni" class="w-5 h-5">
                        </label>

                        <!-- Transfer Bank Mandiri -->
                        <label class="flex items-center justify-between border rounded-lg px-4 py-3 cursor-pointer">
                            <div class="flex flex-col gap-1">
                                <span class="text-sm font-semibold">Transfer Bank Mandiri</span>
                                <span class="text-sm text-gray-500">Nomor Rekening: 123456789 (PT. Rekonser)</span>
                            </div>
                            <input type="radio" id="mandiri" name="payment" value="mandiri" class="w-5 h-5">
                        </label>
                    </form>
                </div>


                <!-- Bukti Pembayaran -->
                <div class="border rounded-lg shadow-sm p-4 bg-white">
                    <h2 class="text-lg font-semibold text-gray-700 mb-3">Bukti Pembayaran</h2>
                    <input type="file"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                </div>

                <!-- Tombol Kirim -->
                <div class="text-center">
                    <button class="w-full bg-blue-600 text-white py-3 rounded-lg shadow-lg hover:bg-blue-700">
                        Kirim
                    </button>
                </div>
            </div>
    </section>
@endsection
