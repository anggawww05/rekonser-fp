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
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="w-[1400px] text-[22px] font-semibold flex items-center gap-4 mt-2 mb-3">
                    <a href="{{ route('manage.products') }}">
                        <img class="h-5 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                    </a>
                    <h1>Informasi Dasar Produk</h1>
                </div>
                <hr class="mt-2 border-1 border-gray-300">
                <div class="flex flex-row gap-4 mt-5">
                    <div>
                        <div class="mb-4 text-lg font-medium ">
                            <img src="{{ asset('storage/' . $product->product_img) }}" alt="image"
                                class="img-preview w-[450px] h-[450px] object-cover border-2 border-gray-300 rounded-lg">
                            <input type="file" id="productImage" name="product_img[]" accept="image/*"
                                class="mt-3 input-file w-1/2 rounded-md shadow-sm focus:ring focus:ring-opacity-50 border-2 border-gray-300"
                                multiple>
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <div class="text-lg font-medium"> Nama Produk
                            <input type="text" id="product_name" name="product_name" value="{{ $product->product_name }}"
                                class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                        </div>
                        <div class="text-lg font-medium">Deskripsi
                            <input type="text" id="description" name="description" value="{{ $product->description }}"
                                class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                        </div>
                        <div class="text-lg font-medium">Stok
                            <input type="text" id="stock" name="stock" value="{{ $product->stock }}"
                                class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                        </div>
                        <div class="text-lg font-medium">Harga
                            <input type="text" id="price" name="price" value="{{ $product->price }}"
                                class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                        </div>
                        <div class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Kategori
                            <select name="category" id="category"
                                class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                                @foreach ($category as $categoryitem)
                                    <option value="{{ $categoryitem->id }}">{{ $categoryitem->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Kondisi
                            <input type="text" id="condition" name="condition"
                                class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50"
                                value="{{ $product->condition }}" placeholder="Masukkan deskripsi" required>
                        </div>
                        <button type="submit"
                            class="px-4 py-2 text-white bg-[#002B43] hover:bg-[#004870] transition rounded-lg">Simpan
                            Perubahan</button>
                    </div>
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
