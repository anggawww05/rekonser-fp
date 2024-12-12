@extends('users.main')

@section('container')
    <div class="w-full h-screen bg-[#F6F6F6] pt-[80px]">
        <div class="w-[1200px] flex justify-center mx-auto">
            <div>
                <div class="w-[1200px] text-[28px] font-semibold flex items-center gap-4 mb-5">
                    <a href="{{ route('profile') }}">
                        <img class="h-6 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                    </a>
                    <h1>Riwayat Transaksi</h1>
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
                                    <td class=" w-[5%] p-4">{{ $loop->iteration }}</td>
                                    <td class=" w-[25%] p-4">{{ $payment->product->product_name }}</td>
                                    <td class=" w-[15%] p-4">Rp.
                                        {{ number_format($payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price, 2, ',', '.') }}
                                    </td>
                                    <td class=" w-[25%] p-4">{{ $payment->rent_method }}</td>
                                    <td class="w-[20%]  p-4 text-center">{{ $payment->start_date }} / {{ $payment->end_date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
