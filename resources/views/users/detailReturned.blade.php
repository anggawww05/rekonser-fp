@extends('users.main')

@section('container')
    <section id="detail-transaksi" class="bg-gray-100 min-h-screen py-8">
        <div class="max-w-4xl mx-auto space-y-6">
            <!-- Header -->
            <div class="w-[1200px] text-[28px] font-semibold flex items-center gap-4 mt-4 mb-3">
                <a href="#">
                    <img class="h-6 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                </a>
                <h1>Detail Pengembalian</h1>
            </div>
            <form action="{{route('returns.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="payment" value="{{ $payment->id }}">
                <div class="max-w-4xl mx-auto flex flex-col gap-3">

                    <!-- Peringatan -->
                    <div class="border rounded-lg shadow-sm p-4 bg-yellow-100">
                        <div class="flex items-center gap-4 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-12 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                            </svg>

                            <div>
                                <p class="text-[18px] font-semibold text-yellow-800">Peringatan!</p>
                                <p class="text-[18px] text-yellow-800">Anda melewati batas waktu periode penyewaan</p>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Pribadi -->
                    <div class="border rounded-lg shadow-sm p-4 bg-white">
                        <h2 class="text-lg font-semibold mb-3">Informasi Pribadi</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                            <div class="flex items-center gap-4 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-8 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <div>
                                    <p class="text-[15px] ">Nama</p>
                                    <p class="text-[18px] font-semibold">Gung Angga</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-8 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>

                                <div>
                                    <p class="text-[15px] ">No Telepon</p>
                                    <p class="text-[18px] font-semibold">0821373892</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-8 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                                <div>
                                    <p class="text-[15px] ">Alamat</p>
                                    <p class="text-[18px] font-semibold">
                                        Jalan Ken Umang Barat Timur Kaja Kangin Kauh No.60
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Detail Pesanan -->
                    <div class="border rounded-lg shadow-sm p-4 bg-white">
                        <h2 class="text-lg font-semibold mb-3">Detail Pesanan</h2>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm">

                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-8 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <div>
                                    <p class="text-[15px]">Produk</p>
                                    <p class="text-[18px] font-semibold">Kamera Sony A6400</p>
                                </div>
                            </div>

                            <!-- Jumlah -->
                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-8 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>

                                <div>
                                    <p class="text-[15px]">Jumlah</p>
                                    <p class="text-[18px] font-semibold">3</p>
                                </div>
                            </div>

                            <!-- Durasi Sewa -->
                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-8 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <div>
                                    <p class="text-[15px] ">Durasi Sewa</p>
                                    <p class="text-[18px] font-semibold">4 hari</p>
                                </div>
                            </div>

                            <!-- Harga per hari -->
                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-8 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>

                                <div>
                                    <p class="text-[15px] ">Harga per hari</p>
                                    <p class="text-[18px] font-semibold">Rp. 90.000</p>
                                </div>
                            </div>


                            <!-- Lama Sewa -->
                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-8 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <div>
                                    <p class="text-[15px] ">Lama Sewa</p>
                                    <p class="text-[18px] font-semibold">11/12/2024 - 15/12/2024</p>
                                </div>
                            </div>
                            <!-- Metode Sewa -->
                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-8 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <div>
                                    <p class="text-[15px] ">Metode Sewa</p>
                                    <p class="text-[18px] font-semibold">Antar-Jemput</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Total Pembayaran -->
                    <div class="border rounded-lg shadow-sm p-4 bg-white">
                        <h2 class="text-lg font-semibold mb-3">Pembayaran Denda</h2>
                        <div class="flex justify-between">
                            <p class="font-[18px]">Subtotal denda</p>
                            <p class="font-semibold text-[18px]">Rp. 100.000</p>
                        </div>
                        <hr class="my-2 border-black">
                        <div class="flex justify-between text-lg">
                            <p class="font-[18px]">Total Pembayaran</p>
                            <p class="font-semibold text-[18px]">Rp. 100.000</p>
                        </div>
                    </div>



                    <!-- Bukti Pembayaran -->
                    <div class="border rounded-lg shadow-sm p-4 bg-white">
                        <h2 class="text-lg font-semibold mb-3">Bukti Pembayaran</h2>
                        <div class="relative">
                            <label class="block">
                                <input type="file" class="sr-only" name="delay_payment_img"> <!-- Input file tetap disembunyikan -->
                                <div
                                    class="flex justify-between items-center w-60 py-2 px-4 text-sm text-gray-500 bg-gray-100 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-200">
                                    <span class="font-[18px]">Upload Bukti Pembayaran</span>
                                    <span class="text-gray-700 font-bold text-lg">+</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Bukti Pembayaran -->
                    <div class="border rounded-lg shadow-sm p-4 bg-white">
                        <h2 class="text-lg font-semibold mb-3">Kondisi Produk</h2>
                        <div class="relative">
                            <label class="block">
                                <input type="file" class="sr-only" name="product_condition_img"> <!-- Input file tetap disembunyikan -->
                                <div
                                    class="flex justify-between items-center w-60 py-2 px-4 text-sm text-gray-500 bg-gray-100 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-200">
                                    <span class="font-[18px]">Upload Kondisi Produk</span>
                                    <span class="text-gray-700 font-bold text-lg">+</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Tombol Kirim -->
                    <div class="text-center">
                        <button class="w-full bg-[#002B43] text-white py-3 rounded-lg shadow-lg hover:bg-[#003654]">
                            Kirim
                        </button>
                    </div>
                </div>
            </form>
    </section>
@endsection
