@extends('users.main')

@section('container')
    <div class = "container mt-40 mb-80 mx-auto flex justify-center flex-col">
        <div class ="flex flex-col items-center" id = "text-pengguna">
            <h1 class="text-[24px] text-center font-semibold">Profil Pengguna</h1>
            <div class="line h-[0.8px] w-[200px] bg-[#AAAAAA]"></div>
        </div>
        {{-- profil --}}
        <div class ="flex items-center mt-5 mx-auto justify-between w-[600px] h-[120px] bg-white outline outline-1 outline-[#AAAAAA] rounded-xl p-4"
            id="profil">
            <div class = "flex items-center space-x-4">
                <img src="#" alt="#" class="h-16 w-16 object-cover">
                <div class="item-center">
                    <h1 class=" text-[26px] font-semibold">Gung Angga</h1>
                    <p>angga@gmail.com</p>
                </div>
            </div>
            <button class="bg-[#003A5B] h-[35px] w-[100px] text-[15px] text-white px-4 py-2 rounded hover:bg-[#004A73] transition">Edit Profil</button>
        </div>

        {{-- Menu Profil --}}
        <a href="">
            <div class="flex items-center mt-4 mx-auto w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-slate-200">
                <h1>Pesanan Saya</h1>
            </div>
        </a>
        <a href="">
            <div class="flex items-center mt-2 mx-auto w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-slate-200">
                <h1>Pengembalian</h1>
            </div>
        </a>
        <a href="">
            <div class="flex items-center mt-2 mx-auto w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-slate-200">
                <h1>Favorit</h1>
            </div>
        </a>
        <a href="">
            <div class="flex items-center mt-2 mx-auto w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-slate-200">
                <h1>Riwayat Transaksi</h1>
            </div>
        </a>
        <a href="">
            <div class="flex items-center mt-2 mx-auto w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-slate-200">
                <h1>Log out</h1>
            </div>
        </a>
    @endsection
