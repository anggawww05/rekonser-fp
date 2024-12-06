@extends('users.main')

@section('container')
    <div class="w-full bg-[#F6F6F6] flex flex-col justify-center items-center">
        <div class="w-[1200px] text-[28px] font-semibold flex items-center gap-4 mb-5 mt-16">
            <a href="{{ route('listProducts') }}">
                <img class="h-6 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
            </a>
            <h1>Detail Produk</h1>
        </div>
        <div class="mb-10 w-[1200px] bg-white rounded-xl shadow-lg border border-[#AAAAAA] p-8">
            <div class="w-full flex">
                <div class="flex flex-col items-start">
                    <div class="w-[400px] h-[400px] flex items-center justify-center text-gray-500 rounded-lg">
                        <img src="{{ asset('storage/' . $product->product_img) }}" alt="{{ $product->name }}" class="h-full object-cover rounded-lg border-2 border-[#5C5C5C]">
                    </div>
                    <div class="flex justify-between gap-4 mt-4 w-[400px]">
                        <div class="aspect-square w-[120px]  flex items-center justify-center text-gray-500  *:rounded-lg">
                            <img src="{{ asset('assets\images\1.png') }}" alt="#" class="object-cover rounded-lg">
                        </div>
                        <div class="aspect-square w-[120px]  flex items-center justify-center text-gray-500  *:rounded-lg">
                            <img src="{{ asset('assets\images\1.png') }}" alt="#" class="object-cover rounded-lg">
                        </div>
                        <div class="aspect-square w-[120px]  flex justify-start text-gray-500  *:rounded-lg">
                            <img src="{{ asset('assets\images\1.png') }}" alt="#" class="object-cover rounded-lg">
                        </div>
                    </div>
                    <div
                        class="mt-6 w-48 flex justify-center bg-gray-100 border border-gray-300 p-2 rounded-lg  mb-4 text-[20px] text-black">
                        082148667077</p>
                    </div>
                </div>
                <div class="ml-8 flex flex-col w-full">
                    <div class="text-[38px]">
                        <div class="font-bold">{{$product->product_name}}</div>
                        <div>Rp. {{$product->price}}</div>
                    </div>
                    <div class="mt-4 text-[20px] flex flex-col gap-3">
                        <div>Tersedia: {{$product->stock}}</div>
                        <div>Kondisi: Baik</div>
                    </div>
                    <div class="mt-4 text-[20px]">Deskripsi:
                        <div class="bg-white border-2 border-[#C6C6C6] rounded-lg w-[700px] h-48 text-[10px] overflow-scroll">
                            <div class="p-2 w-full text-[14px] text-justify ">{{$product->description}}
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex gap-4">
                        <div class="mt-4">
                            <label for="start_date" class="block text-sm font-medium text-black">Tanggal Mulai</label>
                            <input type="date" id="start_date" name="start_date"
                                class="border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-[#003A5B]">
                        </div>
                        <div class="mt-4">
                            <label for="end_date" class="block text-sm font-medium text-black">Tanggal Kembali</label>
                            <input type="date" id="end_date" name="end_date"
                                class="border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-[#003A5B]">
                        </div>
                    </div>
                    <form action="#">
                        <div class="flex gap-4 mt-6">
                            <button class="px-4 py-2 w-full bg-[#003A5B] text-white rounded-md shadow hover:bg-[#005484]">
                                Tambah ke Favorit
                            </button>
                            <button
                                class="px-4 py-2 w-full bg-[#FFDD00] text-black font-semibold rounded-md shadow hover:bg-[#B49C00]">
                                Sewa Sekarang
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
