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
                            <img class="h-6" src="{{ asset('assets/images/profil.svg') }}" alt="Profil">
                            <div>
                                <p class="text-[20px] font-semibold">Nama</p>
                                <p class="text-[18px]">Gung Angga</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mb-3">
                            <img class="h-6" src="{{ asset('assets/images/telepon.svg') }}" alt="Profil">
                            <div>
                                <p class="text-[20px] font-semibold">No Telepon</p>
                                <p class="text-[18px]">0821373892</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mb-3">
                            <img class="h-6 mt-1" src="{{ asset('assets/images/lokasi.svg') }}" alt="Profil">
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
                            <img class="h-6" src="{{ asset('assets/images/profil.svg') }}" alt="Produk">
                            <div>
                                <p class="text-[16px] font-semibold">Produk</p>
                                <p class="text-[14px]">Kamera Sony A6400</p>
                            </div>
                        </div>

                        <!-- Jumlah -->
                        <div class="flex items-center gap-4">
                            <img class="h-6" src="{{ asset('assets/images/telepon.svg') }}" alt="Jumlah">
                            <div>
                                <p class="text-[16px] font-semibold">Jumlah</p>
                                <p class="text-[14px]">3</p>
                            </div>
                        </div>

                        <!-- Durasi Sewa -->
                        <div class="flex items-center gap-4">
                            <img class="h-6" src="{{ asset('assets/images/profil.svg') }}" alt="Durasi Sewa">
                            <div>
                                <p class="text-[16px] font-semibold">Durasi Sewa</p>
                                <p class="text-[14px]">4 hari</p>
                            </div>
                        </div>

                        <!-- Harga per hari -->
                        <div class="flex items-center gap-4">
                            <img class="h-6" src="{{ asset('assets/images/lokasi.svg') }}" alt="Harga per hari">
                            <div>
                                <p class="text-[16px] font-semibold">Harga per hari</p>
                                <p class="text-[14px]">Rp. 90.000</p>
                            </div>
                        </div>


                        <!-- Lama Sewa -->
                        <div class="flex items-center gap-4">
                            <img class="h-6" src="{{ asset('assets/images/profil.svg') }}" alt="Lama Sewa">
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
