@extends('admin.main')

@section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-8  min-h-screen">
            <form action="{{ route('products.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="productName" class="block text-sm font-medium text-gray-700">Nama</label>
                    <textarea id="productName" name="product_name" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">{{ $user->user_name }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="productDescription" class="block text-sm font-medium text-gray-700">Email</label>
                    <textarea id="productDescription" name="product_description" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">{{ $user->email }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="stock" class="block text-sm font-medium text-gray-700">Password</label>
                    <textarea id="productStock" name="stock" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">{{ $user->password }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Role</label>
                    <textarea id="productPrice" name="price" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">{{ $user->role }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="productImage" class="block text-sm font-medium text-gray-700">Foto Profil</label>
                    <img src="{{asset('storage/' . $user->picture_profile)}}" alt="image" class="img-preview w-[300px] h-[300px] object-cover border-2 border-black rounded-lg">

                </div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Simpan
                    Perubahan</button>
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
