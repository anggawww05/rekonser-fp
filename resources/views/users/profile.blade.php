@extends('users.main')

@section('container')
    <div class = "container mt-40 mb-80 mx-auto flex justify-center flex-col">
        <div class ="flex flex-col items-center" id = "text-pengguna">
            <h1 class="text-[24px] text-center font-semibold">Profil Pengguna</h1>
            <div class="line h-[0.8px] w-[200px] bg-[#AAAAAA]"></div>
        </div>

        <div class ="flex items-center mt-5 mx-auto justify-between w-[600px] h-[120px] bg-white outline outline-1 outline-[#AAAAAA] rounded-xl p-4"
            id="profil">
            <div class = "flex items-center space-x-4">
                <img src="{{ asset('storage/' . $user->picture_profile) }}" alt="#" class="h-16 w-16 object-cover rounded-full overflow-hidden border-2 border-black">
                <div class="item-center">
                    <h1 class=" text-[26px] font-semibold">{{ $user->user_name }}</h1>
                    <p>{{ $user->email }}</p>
                </div>
            </div>
            <a href="{{ route('indexedit', Auth::user()->id) }}" class="bg-[#003A5B] h-[35px] w-[100px] text-[15px] text-white px-4 py-2 rounded hover:bg-[#004A73] transition">Edit Profil</a>
        </div>

        <a href="{{route("indexorder")}}">
            <div class="flex items-center mt-4 mx-auto w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-slate-200">
                <h1>Pesanan Saya</h1>
            </div>
        </a>
        <a href="{{route('returns.list')}}">
            <div class="flex items-center mt-2 mx-auto w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-slate-200">
                <h1>Pengembalian</h1>
            </div>
        </a>
        <a href="{{route("favorites.view")}}">
            <div class="flex items-center mt-2 mx-auto w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-slate-200">
                <h1>Favorit</h1>
            </div>
        </a>
        <a href="{{route("indexhistorys")}}">
            <div class="flex items-center mt-2 mx-auto w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-slate-200">
                <h1>Riwayat Transaksi</h1>
            </div>
        </a>
        <a href="">
            <div class="flex items-center mt-2 mx-auto w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-slate-200">
                <h1>Log out</h1>
            </div>
        </a>
    </div>
    @endsection
