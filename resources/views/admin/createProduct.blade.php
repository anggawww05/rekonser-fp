@extends('admin.main')

@section('container')
    <div class="p-4 sm:ml-64 ">
        <div class="p-8  h-full bg-white rounded-lg border-2 shadow-lg" data-aos="fade-up">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="w-[1400px] text-[22px] font-semibold flex items-center gap-4 mt-2 mb-3">
                    <a href="{{ route('manage.products') }}">
                        <img class="h-5 " src="{{ asset('assets/images/backbutton.png') }}" alt="#">
                    </a>
                    <h1>Formulir Tambah Produk</h1>
                </div>
                <hr class="mt-2 border-1 border-gray-300">
                <div class="flex flex-row gap-4 mt-5">
                    <div>
                        <div class="mb-4 text-lg font-medium ">
                            <img src="#" alt="image"
                                class="img-preview w-[450px] h-[450px] object-cover border-2 border-gray-300 rounded-lg aspect-square">
                            <input type="file" id="productImage" name="product_img[]" accept="image/*"
                                class="font-normal text-sm mt-3 input-file w-60 rounded-md shadow-sm focus:ring focus:ring-opacity-50 border-2 border-gray-300" required multiple>
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <div class="text-lg font-medium">Nama Produk
                            <input type="text" id="product_name" name="product_name"
                                class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50" placeholder="Masukkan nama produk" required>
                        </div>
                        <div class="text-lg font-medium">Deskripsi
                            <input type="text" id="description" name="description"
                                class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50" placeholder="Masukkan deskripsi produk" required>
                        </div>
                        <div class="text-lg font-medium">Stok
                            <input type="number" id="stock" name="stock"
                                class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50" placeholder="Masukkan jumlah stok" required>
                        </div>
                        <div class="text-lg font-medium">Harga
                            <input type="text" id="price" name="price"
                                class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50" placeholder="Masukkan harga sewa produk per hari" required>
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
                                class="mt-1 block w-full border-gray-300 text-sm text-gray-600 rounded-md shadow-sm focus:ring focus:ring-opacity-50" placeholder="Masukkan kondisi produk" required>
                        </div>
                        <button type="submit"
                            class="px-4 py-2 text-white bg-[#002B43] hover:bg-[#004870] transition rounded-lg">Tambah Produk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        AOS.init();
        const tagImage = document.querySelector('.img-preview');
        const inputImage = document.querySelector('.input-file');

        inputImage.addEventListener('change', function() {
            tagImage.src = URL.createObjectURL(inputImage.files[0]);
        })
    </script>
@endsection
