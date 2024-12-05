@extends('users.main')

@section('container')
    <div class="container mx-auto px-4 pt-16 w-[1440px]">
        <div class="flex justify-center w-full">
            <div class="flex items-center w-1/2 mb-7">
                <input type="text" id="table-search"
                    class="block p-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#003A5B] focus:border-[#003A5B]"
                    placeholder="Cari produk">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <div class="bg-white p-4 rounded-lg shadow-md border-2 mb-5">
                    <div class="flex justify-center">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                            class="h-[290px] w-[290px] object-cover mb-4 rounded">
                    </div>
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
