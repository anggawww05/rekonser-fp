@extends('admin.main')

@section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-8  min-h-screen">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- <div class="mb-4">
                    <label for="productName" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                    <textarea id="productName" name="product_name" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">{{ $product->product_name }}</textarea>
                </div> --}}
                <div>
                    <label for="username" class="text-lg font-medium">Nama Produk</label>
                    <input type="text" id="username" name="username" value="{{ $product->product_name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                </div>
                <div>
                    <label for="username" class="text-lg font-medium">Deskripsi</label>
                    <input type="text" id="username" name="username" value="{{ $product->description }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                </div>
                <div>
                    <label for="username" class="text-lg font-medium">Stok</label>
                    <input type="text" id="username" name="username" value="{{ $product->stock }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                </div>
                <div>
                    <label for="username" class="text-lg font-medium">Harga</label>
                    <input type="text" id="username" name="username" value="{{ $product->price }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="productImage" class="block text-sm font-medium text-gray-700">Edit Foto</label>
                    <img src="{{asset('storage/' . $product->product_img)}}" alt="image" class="img-preview w-[300px] h-[300px] object-cover border-2 border-black rounded-lg">
                    <input type="file" id="productImage" name="product_img" accept="image/*"
                        class="input-file mt-1 block w-full rounded-md shadow-sm focus:ring focus:ring-opacity-50 border-2 border-black">
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
