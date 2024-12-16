@extends('users.main')

@section('container')
    <div class="w-full bg-[#F6F6F6] pt-[80px] pb-[50px]">
        <div class="w-[1200px] flex justify-center mx-auto">
            <div >
                <div class="w-[1200px] text-[28px] font-semibold flex gap-4">
                    <div class="flex items-center gap-4 mb-5">
                        <a href="{{ route('profile') }}">
                            <img class="h-6 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                        </a>
                        <h1>Favorit</h1>
                    </div>
                    <form action="{{route('favorites.view.search')}}" method="POST" class="ml-auto">
                        @csrf
                        <div class="relative">
                            <input type="text" name="search" placeholder="Cari Produk..."
                                class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button type="submit" class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="flex items-center flex-col gap-8">
                    <table class="w-[1220px] table-auto ">
                        <tbody>
                            @foreach ($user->favorites as $favoriteItem)
                                <tr class="text-center w-full bg-white ring-1 ring-[#AAAAAA] inline-table my-1 rounded-lg text-xl">
                                    <td class="w-[7%]">
                                        <img src="{{ asset('storage/' . $favoriteItem->product->productImage->image_url1) }}"
                                            alt="#" class="aspect-square w-[80px] h-[80px] object-cover bg-gray-300 flex items-center justify-center text-gray-500 border rounded-lg m-2">
                                    </td>
                                    <td class=" w-[73%] p-4 text-left ">
                                        <p class=" font-semibold">{{ $favoriteItem->product->product_name }}</p>
                                        <p>Rp. {{ number_format($favoriteItem->product->price, 2, ',', '.') }}/hari</p>
                                    <td class="w-[20%]  p-4 text-center">
                                        <div class=" w-[120px] flex flex-row gap-2 text-sm">
                                            <a href="{{route("detailProduct", $favoriteItem->product->id)}}",  class=" px-10 bg-[#003A5B] text-white rounded-lg hover:bg-[#004A73] transition flex items-center">Lihat</a>
                                            <form action="{{route('favorites.remove', $favoriteItem->id)}}" method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="w-[100px] h-[40px] bg-red-700 text-white rounded-lg hover:bg-red-500 transition">Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $product->links('components.pagination') }}
            </div>
        </div>
    </div>
@endsection
