@extends('users.main')

@section('container')
    <div class="w-full bg-[#F6F6F6] pt-[80px]">
        <div class="w-[1200px] flex justify-center mx-auto">
            <div>
                <div class="w-[1200px] text-[28px] font-semibold flex gap-4">
                    <div class="flex items-center gap-4 mb-5">
                        <a href="{{ route('profile') }}">
                            <img class="h-6 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                        </a>
                        <h1>Riwayat Transaksi</h1>
                    </div>
                    <form action="{{route('indexhistorys.search')}}" method="POST" class="ml-auto">
                        @csrf
                        <div class="relative">
                            <input type="text" name="search" placeholder="Cari Pesanan..."
                                class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button type="submit" class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class=" flex items-center flex-col gap-8   ">
                    <table class="w-[1220px] table-auto ">
                        <thead>
                            <tr class = "text-center w-full bg-[#003A5B] text-white inline-table rounded-lg mb-1">
                                <th class="w-[5%] p-4">ID</th>
                                <th class="w-[25%] p-4">Pesanan</th>
                                <th class="w-[15%] p-4">Total Harga</th>
                                <th class="w-[25%] p-4">Metode Sewa</th>
                                <th class="w-[20%] p-4">Tanggal Sewa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr class="text-center w-full bg-white ring-1 ring-[#AAAAAA] inline-table my-1 rounded-lg ">
                                    <td class=" w-[5%] p-4">{{ ($payments->currentPage() - 1) * $payments->perPage() + $loop->iteration }}</td>
                                    <td class=" w-[25%] p-4">{{ $payment->product->product_name }}</td>
                                    <td class=" w-[15%] p-4">Rp.
                                        {{ number_format($payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price + $payment->returned->delay_price, 2, ',', '.') }}
                                    </td>
                                    <td class=" w-[25%] p-4">{{ $payment->rent_method }}</td>
                                    <td class="w-[20%]  p-4 text-center">{{ $payment->start_date }} / {{ $payment->end_date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $payments->links('components.pagination') }}
            </div>
        </div>
    </div>
@endsection
