@extends('users.main')

@section('container')
    <div class="w-full bg-[#F6F6F6] pt-[80px] pb-[50px]">
        <div class="w-[1200px] flex justify-center mx-auto">
            <div>
                <div class= "w-[1200px] text-[28px] font-semibold flex items-center gap-4 mb-5 ">
                    <a href="{{ route('profile') }}">
                        <img class="h-6 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                    </a>
                    <h1>Favorit</h1>
                </div>
                <div class="flex items-center flex-col gap-8 min-h-screen">
                    <table class="w-[1220px] table-auto ">
                        <tbody>
                            @foreach ($user->favorites as $favoriteItem)
                                <tr class="text-center w-full bg-white ring-1 ring-[#AAAAAA] inline-table my-1 rounded-lg text-xl">
                                    <td class="w-[7%]">
                                        <img src="{{ asset('storage/' . $favoriteItem->product->productImage->image_url1) }}"
                                            alt="#" class="aspect-square w-[80px] h-[80px] object-cover bg-gray-300 flex items-center justify-center text-gray-500 border rounded-lg m-2">
                                    </td>
                                    <td class=" w-[73%] p-4 text-left ">
                                        <p class=" font-extrabold">{{ $favoriteItem->product->product_name }}</p>
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
            </div>
        </div>
    </div>
@endsection
