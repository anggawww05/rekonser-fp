@extends('users.main')

@section('container')
    <div class="w-full h-screen bg-[#F6F6F6] pt-[80px]">
        <div class="w-[1200px] h-screen flex justify-center mx-auto">
            <div>
                <div class="w-[1200px] text-[28px] font-semibold ">
                    <h1>Pesanan Saya</h1>
                </div>
                <div class=" flex items-center">
                    <table class="w-[1220px] table-auto ">
                        <thead>
                            <tr class = "text-left w-full bg-[#003A5B] text-white inline-table rounded-lg">
                                <th class="w-[40px] p-4">ID</th>
                                <th class="w-[150px] p-4">Pesanan</th>
                                <th class="w-[80px] p-4">Jumlah</th>
                                <th class="w-[85px] p-4">Total Harga</th>
                                <th class="w-[80px] p-4">Metode Sewa</th>
                                <th class="w-[80px] p-4">Status Sewa</th>
                            </tr>
                        </thead>
                        <tbody class="relative top-3 ">
                            <tr class="text-left w-full bg-white border border-lg inline-table my-1">
                                <td class="w-[40px] p-4">11</td>
                                <td class="w-[150px] p-4">Sony a6400</td>
                                <td class="w-[80px] p-4">2</td>
                                <td class="w-[85px] p-4">Rp. 200.000</td>
                                <td class="w-[80px] p-4">antar jemput</td>
                                <td class="w-[80px] p-4">
                                    <div class="absolute bottom-3 right-0 w-32 h-8 text-[#655800] bg-[#FFF8CD] border-[2px] border-[#655800] rounded-lg flex items-center justify-center">
                                        Menunggu
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
