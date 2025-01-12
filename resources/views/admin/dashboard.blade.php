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
            <div class="w-full h-full mt-5 px-8 border-2 border-black rounded-xl" data-aos="fade-up">
                <canvas id="income_payment" class="w-full">
                </canvas>
            </div>
        </div>
    </div>
    <script>
        AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('income_payment');
        const data = @json ($chart_datas);
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                    'November', 'Desember'
                ],
                datasets: [{
                    label: 'Grafik Pendapatan',
                    data: [data.januari, data.februari, data.maret, data.april, data.mei, data.juni, data.juli,
                        data.agustus, data.september, data.oktober, data.november, data.desember
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
