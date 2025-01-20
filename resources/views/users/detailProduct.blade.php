@extends('users.main')

@section('container')
    <div class="w-full bg-[#F6F6F6] flex flex-col justify-center items-center" data-aos="fade-up">
        <div class="w-[1200px] text-[28px] font-semibold flex items-center gap-4 mb-5 mt-16">
            <a href="{{ route('products') }}">
                <img class="h-6 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
            </a>
            <h1>Detail Produk</h1>
        </div>
        @if (session()->has('success') || session()->has('error'))
            @if (session()->has('success'))
            <div class="w-[1200px] h-[50px] rounded-lg p-3 bg-[#E5FFE7]  flex items-center border-2 border-[#007F00]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-[#007F00]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
                </svg>
                <div class="text-[#007F00]">{{ session('success') }}</div>
            </div>
            @else
            <div class="w-[1200px] h-[50px] rounded-lg p-3 bg-[#FFE5E5]  flex items-center border-2 border-[#7F0000]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-[#7F0000]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
                </svg>
                <div class="text-[#7F0000]">{{ session('error') }}</div>
            </div>
            @endif
        @endif
        <div class="mb-10 w-[1200px] bg-white rounded-xl shadow-lg border border-[#AAAAAA] p-8 mt-2">
            <div class="w-full flex">
                <div class="flex flex-col items-start">
                    <div class="container rounded-lg mb-2">
                        <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
                        <img id="expandedImg" src="{{ asset('storage/' . $product->productImage->image_url1) }}"
                            style="width:100%; aspect-ratio: 1 / 1;"
                            class="object-cover cursor-pointer rounded-lg border-2 border-[5C5C5C]">
                    </div>
                    <div class="grid grid-cols-3 gap-3">
                        <div>
                            <img src="{{ asset('storage/' . $product->productImage->image_url1) }}" alt=""
                                style="width:100%; aspect-ratio: 1 / 1;"
                                class="object-cover cursor-pointer rounded-lg border-2 border-[5C5C5C]"
                                onclick="myFunction(this);">
                        </div>
                        <div>
                            <img src="{{ asset('storage/' . $product->productImage->image_url2) }}" alt=""
                                style="width:100%; aspect-ratio: 1 / 1;"
                                class="object-cover cursor-pointer rounded-lg border-2 border-[5C5C5C]"
                                onclick="myFunction(this);">
                        </div>
                        <div>
                            <img src="{{ asset('storage/' . $product->productImage->image_url3) }}" alt=""
                                style="width:100%; aspect-ratio: 1 / 1;"
                                class="object-cover cursor-pointer rounded-lg border-2 border-[5C5C5C]"
                                onclick="myFunction(this);">
                        </div>
                    </div>
                    <div
                        class="mt-6 w-48 flex justify-center bg-gray-100 border border-gray-300 p-2 rounded-lg  mb-4 text-[20px] text-black">
                        082148667077</p>
                    </div>
                </div>
                <div class="ml-8 flex flex-col w-full">
                    <div class="text-[38px]">
                        <div class="font-bold">{{ $product->product_name }}</div>
                        <div>Rp. {{ number_format($product->price, 2, ',', '.') }}/hari</div>

                    </div>
                    <div class="mt-4 text-[20px] flex flex-col gap-3">
                        <div>Tersedia: {{ $product->stock }} stok</div>
                        <div>Kondisi: {{ $product->condition }}</div>
                        <div>Kategori: {{ $product->category->category_name }}</div>
                    </div>
                    <div class="mt-3 text-[20px]">Deskripsi:
                        <div
                            class="bg-white border-2 border-[#C6C6C6] rounded-lg w-[700px] h-48 text-[10px] overflow-scroll">
                            <div class="p-2 w-full text-[14px] text-justify ">{{ $product->description }}
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-4 mt-6 ">
                        <form action="{{ route('favorites.add', $product->id) }}" method="POST">
                            @csrf
                            <button class="px-4 py-2 w-72 bg-[#003A5B] text-white rounded-md shadow hover:bg-[#005484]">
                                Tambah ke Favorit
                            </button>
                        </form>
                        <button class="px-4 py-2 w-full bg-[#FFCC00] text-black font-semibold rounded-md shadow hover:bg-[#FFE57E] flex justify-center disabled:bg-red-600 disabled:text-white" onclick="window.location.href='{{ route('transaction.index', $product->id) }}'" @if ($product->stock==0) disabled @endif>
                            @if ($product->stock==0) Produk Habis @else Sewa Sekarang @endif
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        AOS.init();
        function myFunction(imgs) {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
        }
    </script>

@endsection
