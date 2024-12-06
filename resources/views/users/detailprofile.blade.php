@extends('users.main')

@section('container')
    <div class = "w-full h-screen bg-[#F6F6F6]">
        <div class="w-screen h-[700px]  flex flex-col gap-4  justify-center items-center mx-auto">
            {{-- <div class="w-[1200px] text-[28px] font-semibold">
                <h1>Edit Profil</h1>
            </div> --}}
            <div class="w-[1200px] text-[28px] font-semibold flex items-center gap-4">
                <a href="{{ route('profile') }}">
                    <img class="h-6 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                </a>
                <h1>Edit Profil</h1>
            </div>
            <div class = "">
                <div class = "w-[1200px] h-[500px] bg-white rounded-xl shadow-lg border border-[#AAAAAA] flex flex-row">
                    <form action="{{route('update', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="w-[1160px] h-[500px] flex flex-col items-end justify-center border-black">
                            <div class="w-[1160px] flex items-center justify-between">
                                {{-- foto --}}
                                <div class="flex flex-col gap-8 w-[450px] h-[400px] justify-center items-center">
                                    <div class="w-60 h-60 rounded-full border border-black">
                                        <img src="{{ asset('storage/' . $user->picture_profile) }}" alt="#"
                                            class="object-cover rounded-full overflow-hidden img-preview">
                                    </div>
                                    <input type="file" name="picture_profile" id="picture_profile" class="hidden img-preview" accept="image/*">
                                    <label for="picture_profile"
                                        class="w-[140px] h-[40px] bg-[#F4F4F4] border-[2px] border-[#A4A4A4] rounded-lg text-[#A4A4A4] flex items-center justify-center cursor-pointer">
                                        Pilih Gambar
                                    </label>
                                    {{-- <div class="mb-4">
                                        <label for="productImage" class="block text-sm font-medium text-gray-700">Edit Foto</label>
                                        <img src="{{asset('storage/' . $product->product_img)}}" alt="image" class="img-preview w-[300px] h-[300px] object-cover border-2 border-black rounded-lg">
                                        <input type="file" id="productImage" name="product_img" accept="image/*"
                                        class="input-file mt-1 block w-full rounded-md shadow-sm focus:ring focus:ring-opacity-50 border-2 border-black">
                                    </div> --}}
                                </div>

                                <div>
                                    <div class="w-[670px] h-[400px] flex flex-col gap-4 justify-center">
                                        <div>
                                            <label for="user_name" class="text-lg font-medium">Nama</label>
                                            <input type="text" id="user_name" name="user_name" value="{{ $user->user_name }}" class="w-full max-h-[50px] p-2 border border-gray-300 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="email" class="text-lg font-medium">Email</label>
                                            <input type="text" id="email" name="email" value="{{ $user->email }}" class="w-full max-h-[50px] p-2 border border-gray-300 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="phone_number" class="text-lg font-medium">No. Telp</label>
                                            <input type="text" id="phone_number" name="phone_number" value="{{ $user->phone_number }}" class="w-full max-h-[50px] p-2 border border-gray-300 rounded-lg">
                                        </div>
                                        <div>
                                            <label for="address" class="text-lg font-medium">Alamat</label>
                                            <input type="text" id="address" name="address" value="{{ $user->address }}" class="w-full max-h-[50px] p-2 border border-gray-300 rounded-lg">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <button type="w-[120px] submit"
                                class="w-[120px] h-[40px] bg-[#003A5B] text-white rounded-lg hover:bg-[#004A73] transition">
                                Simpan
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const tagImage = document.querySelector('.img-preview');
        const inputImage = document.querySelector('.input-file');

        inputImage.addEventListener('change', function() {
        tagImage.src = URL.createObjectURL(inputImage.files[0]);
        })
    </script>
@endsection
