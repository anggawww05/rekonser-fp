@extends('users.main')

@section('container')
    <div class="container mx-auto px-4 pt-16 w-[1440px] active-navbar">
        <div class="flex justify-center w-full">
            <div class="flex items-center w-1/2 mb-7">
                <input type="text" id="table-search"
                    class="block p-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#003A5B] focus:border-[#003A5B]"
                    placeholder="Cari produk">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <div class="bg-white p-4 rounded-lg shadow-md border-2 mb-5 flex flex-col gap-2">
                    {{-- <form action="{{ route('detailProduct', $product->id) }}"> --}}
                    @csrf

                    <div class="flex justify-center">
                        <img src="{{ $product->productImage && $product->productImage->image_url1 ? asset('storage/' . $product->productImage->image_url1) : 'https://placehold.co/600x400' }}"
                            alt="{{ $product->name }}"
                            class="h-[290px] w-[290px] object-cover rounded border-2 border-black">
                    </div>
                    <div class="text-[22px] font-semibold">{{ $product->product_name }}</div>
                    <div class="text-[20px]">Rp. {{ $product->price }}</div>
                    <a href="{{ route('detailProduct', $product->id) }}"
                        class="bg-[#023552] hover:bg-[#025E93] text-white font-sb py-2 px-10 rounded flex justify-center">Lihat
                        Detail</a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- <script>
        // // const tagImage = document.querySelector('.img-preview');
        // const inputImage = document.querySelector('.input-file');

        // inputImage.addEventListener('change', function() {
        //     tagImage.src = URL.createObjectURL(inputImage.files[0]);
        // })
    </script> --}}
@endsection
