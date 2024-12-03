@extends('users.main')

@section('container')
    <div class="w-full h-screen bg-[#F6F6F6] flex justify-center items-center">
        <div class="w-[1200px] bg-white rounded-xl shadow-lg border border-[#AAAAAA] p-8">
            <!-- Container utama -->
            <div class="w-full flex">
                <!-- Bagian kiri: Foto utama dan foto kecil -->
                <div class="flex flex-col items-center">
                    <!-- Foto utama -->
                    <div class="aspect-square w-[400px] bg-gray-300 flex items-center justify-center text-gray-500 border rounded-lg">
                        FOTO 1X1
                    </div>
                    <!-- Foto kecil sejajar di bawah foto besar -->
                    <div class="flex justify-between gap-4 mt-4 w-[400px]">
                        <div class="aspect-square w-[120px] bg-gray-300 flex items-center justify-center text-gray-500 border rounded-lg">
                            FOTO 1X1
                        </div>
                        <div class="aspect-square w-[120px] bg-gray-300 flex items-center justify-center text-gray-500 border rounded-lg">
                            FOTO 1X1
                        </div>
                        <div class="aspect-square w-[120px] bg-gray-300 flex items-center justify-center text-gray-500 border rounded-lg">
                            FOTO 1X1
                        </div>
                    </div>
                    <!-- Kontak -->
                    <div class="bg-gray-100 border border-gray-300 p-2 rounded-lg h-auto flex items-center justify-center mt-6">
                        <p class="text-sm text-gray-600 font-medium">082148667077</p>
                    </div>
                    
                </div>
                <!-- Bagian kanan: Informasi produk -->
                <div class="ml-8 flex flex-col w-full">
                    <!-- Nama produk dan harga -->
                    <div>
                        <h1 class="text-2xl font-bold">Nama Produk</h1>
                        <p class="text-xl text-gray-600">Harga Produk</p>
                    </div>
                    <!-- Detail ketersediaan dan kondisi -->
                    <div class="mt-4">
                        <p class="text-sm text-gray-600">Tersedia: <span class="font-semibold">5 item</span></p>
                        <p class="text-sm text-gray-600">Kondisi: <span class="font-semibold">Baik</span></p>
                    </div>
                    <!-- Judul Deskripsi -->
                    <div class="mt-4">
                        <h3 class="font-semibold text-lg">Deskripsi</h3>
                    </div>
                    <!-- Deskripsi dalam kotak -->
                    <div class="bg-gray-100 border border-gray-300 p-4 rounded-lg h-[200px] overflow-auto">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultricies turpis nec nisl sodales, 
                            nec suscipit purus vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames 
                            ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultricies turpis nec nisl sodales, 
                            nec suscipit purus vehicula. 
                        </p>
                    </div>
                    <!-- Tombol aksi -->
                    <div class="flex gap-4 mt-6">
                        <button class="px-4 py-2 bg-gray-200 rounded-md shadow hover:bg-gray-300">
                            Tambah ke Favorit
                        </button>
                        <button class="px-4 py-2 bg-blue-500 text-white rounded-md shadow hover:bg-blue-600">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
