@extends('admin.main')

@section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="sm:rounded-lg" data-aos="fade-up">
                <div class="pb-4 flex">
                    <form action="{{ route('history.search') }}" method="POST">
                        @csrf
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search" name="search"
                                class="block w-[400px] pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#002B43]"
                                placeholder="Cari nama pengguna">
                        </div>
                    </form>
                    <div class="px-8 py-4 bg-black text-white">
                        <a href="{{route('view-pdf')}}">Download</a>
                    </div>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white bg-[#002B43] dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total Pembayaran
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Periode Sewa
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-black">
                                    <td class="px-6 py-4">
                                        {{ ($payments->currentPage() - 1) * $payments->perPage() + $loop->iteration }}
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium">
                                        {{ $payment->user->user_name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $payment->product->product_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp.
                                        {{ number_format($payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price + $payment->returned->delay_price, 2, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $payment->start_date }} / {{ $payment->end_date }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $payments->links('components.pagination') }}
                </div>
            </div>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
@endsection
