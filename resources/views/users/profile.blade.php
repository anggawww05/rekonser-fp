@extends('users.main')

@section('container')
    <div class = "container mt-40 mb-80 mx-auto flex justify-center flex-col">
        <div class ="flex flex-col items-center" id = "text-pengguna" data-aos="fade-up">
            <h1 class="text-[24px] text-center font-semibold">Profil Pengguna</h1>
            <div class="line h-[0.8px] w-[200px] bg-[#AAAAAA]"></div>
        </div>

        <div class ="flex items-center mt-5 mx-auto justify-between w-[600px] h-[120px] bg-white outline outline-1 outline-[#AAAAAA] rounded-xl p-4" data-aos="fade-up"
            id="profil">
            <div class = "flex items-center space-x-4">
                <img src="{{ asset('storage/' . $user->picture_profile) }}" alt="#"
                    class="h-16 w-16 object-cover rounded-full overflow-hidden border-2 border-black">
                <div class="item-center">
                    <h1 class=" text-[26px] font-semibold">{{ $user->user_name }}</h1>
                    <p>{{ $user->email }}</p>
                </div>
            </div>
            <a href="{{ route('indexedit', Auth::user()->id) }}"
                class="bg-[#003A5B] h-[35px] w-[100px] text-[15px] text-white px-4 py-2 rounded hover:bg-[#004A73] transition">Edit
                Profil</a>
        </div>

        <div class="flex flex-col items-center gap-2 mt-4 " data-aos="fade-up">
            <a href="{{ route('indexorder') }}">
                <div
                    class="w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-[#003654] hover:text-white transition">
                    <h1>Pesanan Saya</h1>
                </div>
            </a>
            <a href="{{ route('returns.list') }}" data-aos="fade-up">
                <div
                    class="w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-[#003654] hover:text-white transition">
                    <h1>Pengembalian</h1>
                </div>
            </a>
            <a href="{{ route('favorites.view') }}" data-aos="fade-up">
                <div
                    class="w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-[#003654] hover:text-white transition">
                    <h1>Favorit</h1>
                </div>
            </a>
            <a href="{{ route('indexhistorys') }}" data-aos="fade-up">
                <div
                    class="w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-[#003654] hover:text-white transition">
                    <h1>Riwayat Transaksi</h1>
                </div>
            </a>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="w-[600px] h-[40px] bg-white outline outline-1 outline-[#AAAAAA] rounded-lg p-2 hover:bg-[#DB2F27] hover:text-white transition text-left" data-aos="fade-up">Log out
                </button>
            </form>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
@endsection
