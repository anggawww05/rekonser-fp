@extends('admin.main')

@section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="sm:rounded-lg" data-aos="fade-up">
                <div class="pb-4">
                    <form action="{{ route('confirm-return.search') }}" method="POST">
                        @csrf
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search" name="search"
                                class="block w-[400px] pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#002B43]"
                                placeholder="Cari nama pengguna">
                        </div>
                    </form>

                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white bg-[#002B43] dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Detail Sewa
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($returneds as $returned)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-black">
                                    <td class="px-6 py-4">
                                        {{ ($returneds->currentPage() - 1) * $returneds->perPage() + $loop->iteration }}
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium">
                                        {{ $returned->user->user_name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $returned->product->product_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('index.proof.return', $returned->id) }}"
                                            class="bg-[#002B43] w-16 h-7 p-2 rounded-lg text-white hover:bg-[#003654]">
                                            Lihat Detail
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('confirm-return.edit', $returned->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="success">
                                            @if ($returned->payment->status == 'active')
                                                <button
                                                    class = "bg-green-500 p-4 w-20 h-5 flex items-center justify-center rounded-lg text-white hover:bg-green-400"
                                                    type="submit">
                                                    Setuju
                                                </button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $returneds->links('components.pagination') }}
                </div>
            </div>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
@endsection
