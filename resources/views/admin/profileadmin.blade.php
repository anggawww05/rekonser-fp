@extends('admin.main')

@section('container')
    <div class="p-4 sm:ml-64 ">
        <div class="p-8  h-full bg-white rounded-lg border-2 shadow-lg">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="w-[1400px] text-[22px] font-semibold flex items-center gap-4 mt-2 mb-3">
                    <a href="{{ route('dashboard') }}">
                        <img class="h-5 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                    </a>
                    <h1>Profile Admin</h1>
                </div>
                <hr class="mt-2 border-1 border-gray-300">
                <div class="h-[500px] flex flex-row gap-4 mt-5">
                    <form action="{{ route('update-profile-admin', Auth::user()->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="mb-4 text-lg font-medium w-[450px] h-[450px]">
                                <img src="{{ asset('storage/' . $user->picture_profile) }}" alt="image"
                                    class="img-preview  object-cover border-2 border-gray-300 rounded-lg w-[400px] h-[400px]">
                                <input type="file" id="productImage" name="picture_profile" accept="image/*"
                                    class="font-normal text-sm mt-3 input-file w-60 rounded-md shadow-sm focus:ring focus:ring-opacity-50 border-2 border-gray-300">
                            </div>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <div class="text-lg font-medium">Email
                                <input type="text" id="product_name" name="email" value="{{ $user->email }}"
                                    class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                            </div>
                            <div class="text-lg font-medium">Nama
                                <input type="text" id="description" name="user_name" value="{{ $user->user_name }}"
                                    class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                            </div>
                            <div class="text-lg font-medium">Nomor Telepon
                                <input type="text" id="stock" name="phone_number" value="{{ $user->phone_number }}"
                                    class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                            </div>
                            <div class="text-lg font-medium">Role
                                <input type="text" id="stock" name="role" value="{{ $user->role->role_name }}"
                                    class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                            </div>
                            <button type="submit"
                                class="mt-12 px-4 py-2 text-white bg-[#002B43] hover:bg-[#004870] transition rounded-lg">Simpan
                                Perubahan</button>
                        </div>
                    </form>
                </div>
            </form>
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
