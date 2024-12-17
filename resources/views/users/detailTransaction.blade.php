@extends('users.main')

@section('container')
    <section id="detail-transaksi" class="bg-gray-100 min-h-screen py-8">
        <div class="max-w-4xl mx-auto space-y-6" data-aos="fade-up">
            <!-- Header -->
            <div class="w-[1200px] text-[28px] font-semibold flex items-center gap-4 mt-9 mb-3">
                <a href="{{ route('detailProduct', $product->id) }}">
                    <img class="h-6 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                </a>
                <h1>Detail Transaksi</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('transaction.store', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="max-w-4xl mx-auto flex flex-col gap-3">
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
                                    <p class="text-[18px] font-semibold">{{ $user->user_name }}</p>
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
                                    <p class="text-[18px] font-semibold">{{ $user->phone_number }}</p>
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
                                    <p class="text-[18px] font-semibold">{{ $user->address }}</p>
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
                                    <p class="text-[18px] font-semibold">{{ $product->product_name }}</p>
                                </div>
                            </div>

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
                                    <p class="text-[15px] ">Mulai Sewa</p>
                                    <input type="date" name="start_date" class="start_date rounded-lg">
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
                                    <p class="text-[15px]">Jumlah Produk</p>
                                    <input type="number" name="quantity" class="quantity rounded-lg">
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="#000000" stroke-width="2" class="size-8">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>

                                <div>
                                    <p class="text-[15px] ">Harga per hari</p>
                                    <p class="text-[18px] font-semibold price">Rp. <span
                                            id="product_price">{{ $product->price }}</span></p>
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
                                    <p class="text-[15px] ">Sewa Kembali</p>
                                    <input type="date" name="end_date" class="end_date rounded-lg">
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                    class="size-8">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                                    </rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <div>
                                    <p class="text-[15px]">Durasi Sewa</p>
                                    <div class="flex items-center gap-2">
                                        <input type="text" name="duration"
                                            class="text-[18px] w-full font-semibold duration rounded-lg" value="0"
                                            readonly>
                                        <p> hari</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 bg-white p-4 rounded-lg shadow-sm">
                        <h2 class="text-lg font-semibold ">Pengiriman</h2>
                        <label class="flex items-center justify-between border-2 rounded-lg px-4 py-2 cursor-pointer ">
                            <div class="flex items-center gap-2">
                                <input type="radio" name="rent_method" value="antar-jemput" class="w-4 h-4">
                                <span class="text-[18px]">Antar-Jemput</span>
                            </div>
                            <span class="text-[18px] font-semibold">Rp. 200.000</span>
                        </label>
                        <label class="flex items-center justify-between border-2 rounded-lg px-4 py-2 cursor-pointer">
                            <div class="flex items-center gap-2">
                                <input type="radio" name="rent_method" value="ambil-lokasi" class="w-4 h-4">
                                <span class="text-[18px]">Ambil di lokasi</span>
                            </div>
                            <span class="text-[18px] font-semibold">Rp. 0</span>
                        </label>
                    </div>

                    <div class="border rounded-lg shadow-sm p-4 bg-white">
                        <h2 class="text-lg font-semibold mb-3">Total Pembayaran</h2>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <p class="font-[18px]">Subtotal Produk</p>
                                <p class="font-semibold text-[18px] total">Rp. 0</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="font-[18px]">Subtotal Pengiriman</p>
                                <p class="font-semibold text-[18px] shipping-subtotal">Rp. 0</p>
                            </div>
                            <hr class="my-2 border-black">
                            <div class="flex justify-between text-lg">
                                <p class="font-[18px]">Total Pembayaran</p>
                                <p class="font-semibold text-[18px] final-total">Rp. 0</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 bg-white p-4 rounded-lg shadow-sm">
                        <h2 class="text-lg font-semibold ">Metode Pembayaran</h2>
                        <form class="flex flex-col gap-3">
                            <label class="flex items-center justify-between border-2 rounded-lg px-4 py-3 cursor-pointer">
                                <div class="flex flex-col gap-1">
                                    <span class="font-semibold">Transfer Bank BCA</span>
                                    <span class="font-[18px] ">Nomor Rekening: 123456789 (PT. Rekonser)</span>
                                </div>
                                <input type="radio" id="bca" name="payment_method" value="bca"
                                    class="w-5 h-5">
                            </label>

                            <label class="flex items-center justify-between border-2 rounded-lg px-4 py-3 cursor-pointer">
                                <div class="flex flex-col gap-1">
                                    <span class=" font-semibold">Transfer Bank BNI</span>
                                    <span class="font-[18px]">Nomor Rekening: 123456789 (PT. Rekonser)</span>
                                </div>
                                <input type="radio" id="bni" name="payment_method" value="bni"
                                    class="w-5 h-5">
                            </label>

                            <label class="flex items-center justify-between border-2 rounded-lg px-4 py-3 cursor-pointer">
                                <div class="flex flex-col gap-1">
                                    <span class=" font-semibold">Transfer Bank Mandiri</span>
                                    <span class="font-[18px] ">Nomor Rekening: 123456789 (PT. Rekonser)</span>
                                </div>
                                <input type="radio" id="mandiri" name="payment_method" value="mandiri"
                                    class="w-5 h-5">
                            </label>
                        </form>
                    </div>

                    <div class="border rounded-lg shadow-sm p-4 bg-white">
                        <h2 class="text-lg font-semibold mb-3">Bukti Pembayaran</h2>
                        <div class="relative">
                            <input type="file" name="transaction_img" class="border-2 rounded-lg w-1/2 text-[12px]">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="w-full bg-[#002B43] text-white py-3 rounded-lg shadow-lg hover:bg-[#003654]">
                            Kirim
                        </button>
                    </div>
            </form>
        </div>
    </section>
    <script>
        AOS.init();
        document.addEventListener('DOMContentLoaded', function() {
            const startDateInput = document.querySelector('.start_date');
            const endDateInput = document.querySelector('.end_date');
            const durationOutput = document.querySelector('.duration');
            const quantityInput = document.querySelector('.quantity');
            const priceElement = document.querySelector('.price');
            const totalElement = document.querySelector('.total');
            const shippingOptions = document.querySelectorAll('input[name="rent_method"]');
            const shippingSubtotalElement = document.querySelector('.shipping-subtotal');
            const finalTotalElement = document.querySelector('.final-total');

            const productPriceElement = document.getElementById('product_price'); // Harga dari database
            const productPrice = parseInt(productPriceElement.textContent);

            let shippingCost = 0; // Nilai pengiriman awal (default)

            function calculateDuration() {
                const startDate = new Date(startDateInput.value);
                const endDate = new Date(endDateInput.value);

                if (startDate && endDate && endDate >= startDate) {
                    const duration = Math.ceil((endDate - startDate) / (1000 * 60 * 60 *
                        24)); // Hitung selisih dalam hari
                    durationOutput.value = duration;
                    return parseInt(duration);
                } else {
                    durationOutput.value = 0;
                    return 0;
                }
            }

            function calculateTotal() {
                const quantity = parseInt(quantityInput.value) || 0;
                const duration = calculateDuration();
                const productSubtotal = quantity * productPrice * duration;

                totalElement.textContent = productSubtotal.toLocaleString('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                });

                const finalTotal = productSubtotal + shippingCost;

                finalTotalElement.textContent = finalTotal.toLocaleString('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                });
            }

            // Update biaya pengiriman berdasarkan opsi yang dipilih
            shippingOptions.forEach(option => {
                option.addEventListener('change', function() {
                    shippingCost = parseInt(this.value === 'antar-jemput' ? 200000 : 0);
                    shippingSubtotalElement.textContent = shippingCost.toLocaleString('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                    });

                    calculateTotal();
                });
            });

            startDateInput.addEventListener('change', calculateTotal);
            endDateInput.addEventListener('change', calculateTotal);
            quantityInput.addEventListener('input', calculateTotal);
        });
    </script>
@endsection
