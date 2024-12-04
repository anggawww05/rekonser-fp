@extends('users.main')

@section('container')
    <div class = "w-full h-screen bg-[#F6F6F6]">
        <div class="w-screen h-[700px]  flex flex-col gap-4  justify-center items-center mx-auto">
            {{-- <div class="w-[1200px] text-[28px] font-semibold">
                <h1>Edit Profil</h1>
            </div> --}}
            <div class="w-[1200px] text-[28px] font-semibold flex items-center gap-4">
                <a href="#">
                    <img class="h-6 " src="{{asset('assets/images/backbutton.png')}}" alt="#">
                </a>
                <h1>Edit Profil</h1>
            </div>
            <div class = "">
                <div class = "w-[1200px] h-[500px] bg-white rounded-xl shadow-lg border border-[#AAAAAA] flex flex-row">
                    <div class="w-[1160px] h-[500px] flex flex-col items-end justify-center border-black">
                        <div class="w-[1160px] flex items-center justify-between">
                            {{-- foto --}}
                            <div class="flex flex-col gap-8 w-[450px] h-[400px] justify-center items-center">
                                <div class="w-60 h-60 rounded-full border border-black">
                                    <img src="{{ asset('assets\images\1.png') }}" alt="#" class="object-cover rounded-full ">
                                </div>
                                <button type="button"
                                    class="w-[140px] h-[40px] bg-[#F4F4F4] border-[2px] border-[#A4A4A4] rounded-lg text-[#A4A4A4]">Pilih
                                    Gambar</button>
                            </div>

                            <div>
                                <form action="#">
                                    <div class="w-[670px] h-[400px] flex flex-col gap-4 justify-center">
                                        <div>
                                            <label for="name" class="text-lg font-medium">Nama</label>
                                            <input type="text" id="name" name="name"
                                            class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Gung Angga">
                                        </div>
                                        <div>
                                            <label for="name" class="text-lg font-medium">Email</label>
                                            <input type="text" id="name" name="name"
                                            class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Gung Angga">
                                        </div>
                                        <div>
                                            <label for="name" class="text-lg font-medium">No. Telepon</label>
                                            <input type="text" id="name" name="name"
                                            class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Gung Angga">
                                        </div>
                                        <div>
                                            <label for="name" class="text-lg font-medium">Alamat</label>
                                            <input type="text" id="name" name="name"
                                            class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Gung Angga">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=" w-[120px]">
                            <button type="submit"
                                class="w-[120px] h-[40px] bg-[#003A5B] text-white rounded-lg hover:bg-[#004A73] transition">Simpan</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
