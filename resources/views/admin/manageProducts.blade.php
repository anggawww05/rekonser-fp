@extends('admin.main')

@section('container')
    <div class="sm:ml-64">
        <div class="p-4 min-h-screen" data-aos="fade-up">
            <div class="mt-4 mx-4">
                <div class="sm:rounded-lg" data-aos="fade-up">
                    <div class="pb-4 ">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative flex flex-row gap-3">
                            <form action="{{ route('product.search') }}" method="POST">
                                @csrf
                                <div class="flex">
                                    <input type="text" id="table-search" name="search"
                                        class="block p-2 pl-10 w-[400px] text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#003A5B] focus:border-[#003A5B]"
                                        placeholder="Cari produk">
                                    <button type="submit">
                                        <svg class="w-5 h-5 text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                            <a href="{{ route('products.create') }}"
                                class="flex items-center justify-center px-4 py-2 w-36 rounded-md font-semibold text-xs text-white bg-[#002B43] hover:bg-[#004870] transition">
                                Tambah Produk
                            </a>
                        </div>
                    </div>

                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-black">
                        <thead class="text-xs text-white bg-[#002B43]">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Stok
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr class="bg-white border-b font-medium text-gray-900 ">
                                    <td class="px-6 py-4">
                                        {{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}
                                    </td>
                                    <th scope="row" class="px-6 py-4">
                                        {{ $product->product_name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        Rp {{ number_format($product->price, 2, ',', '.') }}/hari
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->stock }}
                                    </td>
                                    <td class="flex my-2 gap-2">
                                        <button data-modal-target="popup-modal-{{$product->id}}" data-modal-toggle="popup-modal-{{$product->id}}"
                                            class="block text-white bg-red-600 hover:bg-red-800 font-medium rounded-lg text-sm px-4 py-2 text-center"
                                            type="button">
                                            Hapus
                                        </button>
                                        <div id="popup-modal-{{$product->id}}" tabindex="-1"
                                            class="bg-black bg-opacity-40 h-screen hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <div class="relative bg-white rounded-lg shadow">
                                                    <button type="button"
                                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                        data-modal-hide="popup-modal">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-4 md:p-5 text-center">
                                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                        <h3
                                                            class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                            Yakin ingin menghapus produk {{ $product->product_name }}?</h3>
                                                        <div class="flex flex-row justify-center">
                                                            <form action="{{ route('products.delete', $product->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button data-modal-hide="popup-modal-{{$product->id}}" type="submit"
                                                                    class="text-white bg-red-600 hover:bg-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                    Yakin
                                                                </button>
                                                            </form>
                                                            <button data-modal-hide="popup-modal-{{$product->id}}" type="button"
                                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100">Batal</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="block text-white bg-[#003A5B] hover:bg-[#004870] font-medium rounded-lg text-sm px-4 py-2 text-center"
                                            type="button">
                                            Edit
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links('components.pagination') }}
                </div>
            </div>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
@endsection
