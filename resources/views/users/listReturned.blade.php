@extends('users.main')

@section('container')
    <div class="w-full h-screen bg-[#F6F6F6] pt-[80px] pb-24">
        <div class="w-[1200px] flex justify-center mx-auto">
            <div>
                <div class="w-[1200px] text-[28px] font-semibold flex gap-4">
                    <div class="flex items-center gap-4 mb-5">
                        <a href="{{ route('profile') }}">
                            <img class="h-6 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                        </a>
                        <h1>Pengembalian</h1>
                    </div>
                    <form action="{{ route('returns.list.search') }}" method="POST" class="ml-auto">
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
                                <tr class="text-center w-full bg-white border-lg ring-1 ring-[#AAAAAA] inline-table my-1 rounded-lg"
                                    data-aos="fade-up">
                                    <td class=" w-[5%] p-4">
                                        {{ ($returns->currentPage() - 1) * $returns->perPage() + $loop->iteration }}</td>
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

                                            @case('pending')
                                                <div
                                                    class=" w-36 mx-auto m-2 box-border bg-[#FFF8CD] text-[#655800] rounded-lg py-1 border-2 border-[#655800]">
                                                    Menunggu
                                                </div>
                                            @break

                                            @case('delay')
                                                <div
                                                    class=" w-36 mx-auto m-2 box-border bg-[#FFE5E5] text-[#7F0000] rounded-lg py-1 border-2 border-[#7F0000]">
                                                    Terlambat
                                                </div>
                                            @break

                                            @default
                                                <div
                                                    class="w-36 mx-auto m-2 bg-[#ECECEC] text-[#404040] rounded-lg py-1 border-2 border-[#404040]">
                                                    Selesai
                                                </div>
                                        @endswitch
                                    </td>
                                    <td class="w-[20%] p-4 ">
                                        @if ($return->status == 'active' || $return->status == 'delay')
                                            <a href="{{ route('returns.index', $return->payment) }}"
                                                class="px-6 py-2 bg-[#002B43] text-white rounded-lg shadow-lg hover:bg-[#003654] transition">Ajukan</a>
                                        @endif
                                    </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $returns->links('components.pagination') }}
            </div>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
@endsection
