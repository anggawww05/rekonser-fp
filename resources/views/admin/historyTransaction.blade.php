@extends('admin.main')

@section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="sm:rounded-lg" data-aos="fade-up">
                <form action="{{route('view-pdf')}}" method="POST">
                    @csrf
                    <div class="pb-4 flex flex-row gap-2 items-center">
                        <input type="date" id="start-date" name="start_date"
                            class="block w-[150px] text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#002B43]">
                        -
                        <input type="date" id="end-date" name="end_date"
                            class="block w-[150px] text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#002B43]">

                        <button type="submit" class="px-4 py-2 bg-[#002B43] hover:bg-[#025E93] transition text-white rounded-lg">Download</button>
                    </div>
                </form>
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
                                    Tanggal Transaksi
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
                                        {{ number_format($payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price, 2, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ \Carbon\Carbon::parse($payment->created_at)->translatedFormat('d F Y') }}
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
