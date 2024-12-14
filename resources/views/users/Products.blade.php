@extends('users.main')

@section('container')
    <div class="container mx-auto px-4 pt-16 w-[1440px] active-navbar">
        <div class="flex justify-center w-full">
            <div class="flex items-center w-1/2 mb-7">
                <div class="relative w-full">
                    <form action="{{ route('products.search') }}">
                        <input type="text" id="table-search" name="search"
                            class="block p-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#003A5B] focus:border-[#003A5B]"
                            placeholder="Cari produk">
                        <button type="submit" class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <div class="bg-white p-4 rounded-lg shadow-md border-2 mb-5 flex flex-col gap-2" data-aos="fade-up">
                    @csrf

                    <div class="flex justify-center">
                        <img src="{{ $product->productImage && $product->productImage->image_url1 ? asset('storage/' . $product->productImage->image_url1) : 'https://placehold.co/600x400' }}"
                            alt="{{ $product->name }}"
                            class="h-[290px] w-[290px] object-cover rounded border-2 border-black">
                    </div>
                    <div class="text-[22px] font-semibold">{{ $product->product_name }}</div>
                    <div class="text-[20px]">Rp. {{ number_format($product->price, 2, ',', '.') }}/hari</div>
                    <a href="{{ route('detailProduct', $product->id) }}"
                        class="bg-[#023552] hover:bg-[#025E93] text-white font-sb py-2 px-10 rounded flex justify-center">Lihat
                        Detail</a>
                </div>
            @endforeach
        </div>
        {{ $products->links('components.pagination') }}
    </div>
    <script>
        AOS.init();
    </script>
@endsection
