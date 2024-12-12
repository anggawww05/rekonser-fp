@extends('users.main')

@section('container')
    <div class="w-full bg-[#F6F6F6] pt-[80px] pb-24">
        <div class="w-[1200px] flex justify-center mx-auto">
            <div>
                <div class="w-[1200px] text-[28px] font-semibold flex items-center gap-4 mb-5">
                    <a href="{{ route('profile') }}">
                        <img class="h-6 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                    </a>
                    <h1>Pengembalian</h1>
                </div>
                <div class=" flex items-center flex-col gap-8">
                    <table class="w-[1220px] table-auto ">
                        <thead>
                            <tr class = "text-center w-full bg-[#003A5B] text-white inline-table rounded-lg mb-1">
                                <th class="w-[5%] p-4">ID</th>
                                <th class="w-[20%] p-4">Pesanan</th>
                                <th class="w-[10%] p-4">Periode Mulai</th>
                                <th class="w-[15%] p-4">Periode Berakhir</th>
                                <th class="w-[15%] p-4">Status Sewa</th>
                                <th class="w-[20%] p-4">Pengembalian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($returns as $return)
                                <tr
                                    class="text-center w-full bg-white border-lg ring-1 ring-[#AAAAAA] inline-table my-1 rounded-lg">
                                    <td class=" w-[5%] p-4">{{ $return->id }}</td>
                                    <td class=" w-[20%] p-4">{{ $return->product->product_name }}</td>
                                    <td class=" w-[10%] p-4">{{ $return->payment->start_date }}</td>
                                    <td class=" w-[15%] p-4">{{ $return->payment->end_date }}</td>
                                    <td class=" w-[15%] p-4">
                                        @switch($return->status)
                                            @case('active')
                                                <div
                                                    class="w-36 mx-auto m-2 bg-[#E5FFE7] text-[#007F00] rounded-lg py-1 border-2 border-[#007F00]">
                                                    Aktif
                                                </div>
                                            @break

                                            @case('delay')
                                                <div
                                                    class=" w-36 mx-auto m-2 box-border bg-[#FFE5E5] text-[#7F0000] rounded-lg py-1 border-2 border-[#7F0000]">
                                                    Terlambat
                                                </div>
                                            @break

                                            @case('pending')
                                                <div
                                                    class=" w-36 mx-auto m-2 box-border bg-[#FFF8CD] text-[#655800] rounded-lg py-1 border-2 border-[#655800]">
                                                    Menunggu
                                                </div>
                                            @break

                                            @default
                                                <div
                                                    class="w-36 mx-auto m-2 bg-[#E5FFE7] text-[#007F00] rounded-lg py-1 border-2 border-[#007F00]">
                                                    Selesai
                                                </div>
                                        @endswitch
                                    </td>
                                    <td class="w-[20%] p-4 ">
                                        @if ($return->status == 'active' || $return->status == 'delay')
                                            <a href="{{ route('returns.index', $return->payment) }}" class="px-6 py-2 bg-[#002B43] text-white rounded-lg shadow-lg hover:bg-[#003654] transition">Ajukan</a>
                                        @endif
                                    </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
