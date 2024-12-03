@extends('users.main')

@section('container')
    <div class="w-full h-screen bg-[#F6F6F6]">
        <div class="w-[1200px] h-screen flex flex-col gap-6 justify-center items-center mx-auto">
            <div class="w-[1200px] text-[28px] font-semibold">
                <h1>Pesanan Saya</h1>
            </div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr c>
                        <th class="bg-green-500 text-white p-2">ID</th>
                        <th class="bg-green-500 text-white p-2">Pesanan</th>
                        <th class="bg-green-500 text-white p-2">Jumlah</th>
                        <th class="bg-green-500 text-white p-2">Total Harga</th>
                        <th class="bg-green-500 text-white p-2">Metode Sewa</th>
                        <th class="bg-green-500 text-white p-2">Status Sewa</th>
                    </tr>
                </thead>
            </table>

            <table class="table-auto w-full border-spacing-y-4">
                <tr>
                    <td class="border p-2">11</td>
                    <td class="border p-2">Sony a6400</td>
                    <td class="border p-2">2</td>
                    <td class="border p-2">Rp. 200.000</td>
                    <td class="border p-2">antar jemput</td>
                    <td class="border p-2">aktif</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
