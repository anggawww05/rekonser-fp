@extends('admin.main')

@section('container')
    <section id="detail-transaksi" class="bg-gray-100 min-h-screen py-8" data-aos="fade-up">
        <div class="ml-64 flex flex-col">
            <div class="w-[1200px] mx-auto flex flex-col gap-2">
                <div class="w-[1400px] text-[22px] font-semibold flex items-center gap-4 mt-2 mb-3">
                    <a href="{{route('confirm-rent')}}">
                        <img class="h-5 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                    </a>
                    <h1>Detail Sewa</h1>
                </div>
                <div class="border rounded-lg shadow-sm p-4 bg-white">
                    <h2 class="text-lg font-semibold mb-3">Informasi Pribadi</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                        <div class="flex items-center gap-4 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" class="size-8">
                                <path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3" />
                                <circle cx="12" cy="10" r="3" />
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                            <div>
                                <p class="text-[15px] ">Nama</p>
                                <p class="text-[18px] font-semibold">{{$payment->user->user_name}}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" class="size-8">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg>
                            <div>
                                <p class="text-[15px] ">No Telepon</p>
                                <p class="text-[18px] font-semibold">{{$payment->user->phone_number}}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" class="size-12">
                                <circle cx="12" cy="10" r="3" />
                                <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z" />
                            </svg>
                            <div>
                                <p class="text-[15px] ">Alamat</p>
                                <p class="text-[18px] font-semibold">
                                    {{$payment->user->address}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border rounded-lg shadow-sm p-4 bg-white">
                    <h2 class="text-lg font-semibold mb-3">Detail Pesanan</h2>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm">

                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" class="size-8">
                                <rect x="2" y="4" width="20" height="16" rx="2" />
                                <path d="M7 15h0M2 9.5h20" />
                            </svg>
                            <div>
                                <p class="text-[15px]">Produk</p>
                                <p class="text-[18px] font-semibold">{{$payment->product->product_name}}</p>
                            </div>
                        </div>

                        <!-- Jumlah -->
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" class="size-8">
                                <path d="M21.5 12H16c-.7 2-2 3-4 3s-3.3-1-4-3H2.5" />
                                <path
                                    d="M5.5 5.1L2 12v6c0 1.1.9 2 2 2h16a2 2 0 002-2v-6l-3.4-6.9A2 2 0 0016.8 4H7.2a2 2 0 00-1.8 1.1z" />
                            </svg>
                            <div>
                                <p class="text-[15px]">Jumlah</p>
                                <p class="text-[18px] font-semibold">{{$payment->quantity}}</p>
                            </div>
                        </div>

                        <!-- Durasi Sewa -->
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" class="size-8">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <div>
                                <p class="text-[15px] ">Durasi Sewa</p>
                                <p class="text-[18px] font-semibold">{{$payment->duration}} hari</p>
                            </div>
                        </div>

                        <!-- Harga per hari -->
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" class="size-8">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>

                            <div>
                                <p class="text-[15px] ">Harga per hari</p>
                                <p class="text-[18px] font-semibold">Rp. {{ number_format($payment->product->price, 2, ',', '.') }}</p>

                            </div>
                        </div>


                        <!-- Lama Sewa -->
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="size-8">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <div>
                                <p class="text-[15px] ">Lama Sewa</p>
                                <p class="text-[18px] font-semibold">{{$payment->start_date}} - {{$payment->end_date}}</p>
                            </div>
                        </div>
                        <!-- Metode Sewa -->
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" class="size-8">
                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                </path>
                                <line x1="7" y1="7" x2="7.01" y2="7"></line>
                            </svg>
                            <div>
                                <p class="text-[15px] ">Metode Sewa</p>
                                <p class="text-[18px] font-semibold">{{$payment->rent_method}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Pembayaran -->
                <div class="border rounded-lg shadow-sm p-4 bg-white">
                    <h2 class="text-lg font-semibold mb-3">Total Pembayaran</h2>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <p class="font-[18px]">Subtotal Produk</p>
                            <p class="font-semibold text-[18px]">Rp. {{ number_format($payment->product->price * $payment->quantity * $payment->duration, 2, ',', '.') }}</p>

                        </div>
                        <div class="flex justify-between">
                            <p class="font-[18px]">Subtotal Pengiriman</p>
                            <p class="font-semibold text-[18px]">Rp.{{ number_format($payment->delivery_price, 2, ',', '.') }}</p>
                        </div>
                        <hr class="my-2 border-black">
                        <div class="flex justify-between text-lg">
                            <p class="font-[18px]">Total Pembayaran</p>
                            <p class="font-semibold text-[18px]">Rp. {{ number_format($payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price, 2, ',', '.') }}</p>
                        </div>
                    </div>
                </div>

                <div class="border rounded-lg shadow-sm p-4 bg-white">
                    <h2 class="text-lg font-semibold mb-3 text-center">Bukti Pembayaran</h2>
                    <div class="flex justify-center items-center">
                        <img class="h-[500px]" src="{{ asset('storage/' . $payment->transaction_img) }}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        AOS.init();
    </script>
@endsection
