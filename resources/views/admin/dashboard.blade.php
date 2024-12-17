@extends('admin.main')

@section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-4 min-h-screen">
            <div class="flex flex-col gap-3" data-aos="fade-up">
                <h1 class="text-xl">Selamat datang, Admin!</h1>
                <div class="flex flex-row gap-2">
                    <div
                        class="bg-white h-[150px] flex flex-col justify-center rounded-xl p-4 border-2 border-[#7F7F7F] w-full">
                        <div class="text-[20px] font-semibold">
                            Jumlah Produk
                        </div>
                        <div class="text-[52px] font-semibold">
                            {{ $products->count() }}
                        </div>
                    </div>
                    <div
                        class="bg-white h-[150px] flex flex-col justify-center rounded-xl p-4 border-2 border-[#7F7F7F] w-full">
                        <div class="text-[20px] font-semibold">
                            Jumlah Pengguna
                        </div>
                        <div class="text-[52px] font-semibold">
                            {{ $users->count() }}
                        </div>
                    </div>
                    <div
                        class="bg-white h-[150px] flex flex-col justify-center rounded-xl p-4 border-2 border-[#7F7F7F] w-full">
                        <div class="text-[20px] font-semibold">
                            Total Pendapatan
                        </div>
                        <div class="text-[32px] font-semibold">
                            Rp
                            {{ number_format(
                                $payments->sum(function ($payment) {
                                    return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
                                }),
                                2,
                                ',',
                                '.',
                            ) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
@endsection
