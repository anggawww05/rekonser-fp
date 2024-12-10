@extends('admin.main')

@section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-4 min-h-screen">
            <div class="flex flex-col gap-3">
                <div class="bg-[#E5FFE7] h-[80px] rounded-xl p-4 flex items-center border-2 border-[#007F00]">
                    <div class="text-[24px] font-semibold text-[#007F00]">
                        Halo, selamat datang Admin!
                    </div>
                </div>
                <div
                    class="bg-white h-[200px] rounded-xl flex flex-col items-center justify-center border-2 border-[#7F7F7F]">
                    <div class="text-[24px] font-semibold text-black">
                        Jumlah pengguna
                    </div>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="80" height="80" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                    </svg>
                    <div class="text-[52px] font-semibold text-black">
                        50
                    </div>
                </div>
                <div
                    class="bg-white h-[200px] rounded-xl flex flex-col items-center justify-center border-2 border-[#7F7F7F]">
                    <div class="text-[24px] font-semibold text-black">
                        Jumlah produk
                    </div>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                    </svg>
                    <div class="text-[52px] font-semibold text-black">
                        50
                    </div>
                </div>
                <div class="flex flex-row gap-2">
                    <div
                        class="bg-white h-[150px] flex flex-col justify-center rounded-xl p-4 border-2 border-[#7F7F7F] w-full">
                        <div class="text-[20px] font-semibold">
                            Stok Produk
                        </div>
                        <div class="text-[52px] font-semibold">
                            56
                        </div>
                    </div>
                    <div
                        class="bg-white h-[150px] flex flex-col justify-center rounded-xl p-4 border-2 border-[#7F7F7F] w-full">
                        <div class="text-[20px] font-semibold">
                            Produk Tersewa
                        </div>
                        <div class="text-[52px] font-semibold">
                            56
                        </div>
                    </div>
                    <div
                        class="bg-white h-[150px] flex flex-col justify-center rounded-xl p-4 border-2 border-[#7F7F7F] w-full">
                        <div class="text-[20px] font-semibold">
                            Total Pendapatan
                        </div>
                        <div class="text-[32px] font-semibold">
                            Rp. 13.000.000
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
