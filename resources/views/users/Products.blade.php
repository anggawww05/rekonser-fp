@extends('users.main')

@section('container')
    <div class="container mx-auto px-4 pt-16 w-[1440px]">
        <div class="flex justify-center w-full">
            <div class="flex items-center w-1/2">
                <input type="text"
                    class="px-4 py-2 rounded-l-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#023552] focus:border-transparent w-full"
                    placeholder="Cari produk    ..." />
                <button class="bg-[#023552] hover:bg-[#025E93] text-white px-4 py-3 rounded-r-md ring-1 ring-[#023552]">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
        <div>
            <h1 class="text-3xl font-semibold text-gray-900 mt-8 mb-4">List Produk</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <div class="bg-white p-4 rounded-lg shadow-md outline-6">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                        class="w-full h-48 object-cover mb-4 rounded">
                    <h2 class="text-xl font-bold mb-2">{{ $product->name }}</h2>
                    <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                    <p class="text-gray-900 font-semibold">{{ $product->price }}</p>
                    <div class="flex justify-center mt-4">
                        <button class="bg-[#023552] hover:bg-[#025E93] text-white font-sb py-2 px-10 rounded">
                            Lihat detail
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
