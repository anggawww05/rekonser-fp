@extends('users.main')

@section('container')
    <div class="w-full bg-[#F6F6F6] flex flex-col justify-center items-center">
        <div class="w-[1200px] text-[28px] font-semibold flex items-center gap-4 mb-5 mt-16">
            <a href="{{ route('products') }}">
                <img class="h-6 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
            </a>
            <h1>Detail Produk</h1>
        </div>
        @if (session()->has('success'))
            <p>{{ session('success') }}</p>
        @else
            <p>{{ session('error') }}</p>
        @endif
        <div class="mb-10 w-[1200px] bg-white rounded-xl shadow-lg border border-[#AAAAAA] p-8">
            <div class="w-full flex">
                <div class="flex flex-col items-start">
                    <div class="container rounded-lg mb-2">
                        <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
                        <img id="expandedImg" src="{{ asset('storage/' . $product->productImage->image_url1) }}" style="width:100%" class="w-full object-cover cursor-pointer rounded-lg border-2 border-[5C5C5C]">
                    </div>
                    <div class="grid grid-cols-3 gap-3">
                        <div>
                            <img src="{{ asset('storage/' . $product->productImage->image_url1) }}" alt="" class="w-full object-cover cursor-pointer rounded-lg border-2 border-[#5C5C5C]"
                                onclick="myFunction(this);">
                        </div>
                        <div>
                            <img src="{{ asset('storage/' . $product->productImage->image_url2) }}" alt="" class="w-full object-cover cursor-pointer rounded-lg border-2 border-[#5C5C5C]"
                                onclick="myFunction(this);">
                        </div>
                        <div>
                            <img src="{{ asset('storage/' . $product->productImage->image_url3) }}" alt="" class="w-full object-cover cursor-pointer rounded-lg border-2 border-[#5C5C5C]"
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
                        <a href="{{ route('transaction.index', $product->id) }}"
                            class="px-4 py-2 w-full bg-[#FFCC00] text-black font-semibold rounded-md shadow hover:bg-[#FFE57E] flex justify-center ">Sewa
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction(imgs) {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
        }
    </script>
@endsection
