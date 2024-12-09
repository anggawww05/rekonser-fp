@extends('users.main')

@section('container')
    <div class="w-full h-screen bg-[#F6F6F6] pt-[80px]">
        <div class="w-[1200px] h-screen flex justify-center mx-auto">
            <div>
                <div class="w-[1200px] text-[28px] font-semibold flex items-center gap-4 mb-5">
                    <a href="{{route('profile')}}">
                        <img class="h-6 " src="{{asset('assets/images/backbutton.png')}}" alt="#">
                    </a>
                    <h1>Pesanan Saya</h1>
                </div>
                <div class=" flex items-center flex-col gap-8">
                    <table class="w-[1220px] table-auto ">
                        <thead>
                            <tr class = "text-center w-full bg-[#003A5B] text-white inline-table rounded-lg mb-1">
                                <th class="w-[5%] p-4">ID</th>
                                <th class="w-[25%] p-4">Pesanan</th>
                                <th class="w-[10%] p-4">Jumlah</th>
                                <th class="w-[15%] p-4">Total Harga</th>
                                <th class="w-[25%] p-4">Metode Sewa</th>
                                <th class="w-[20%] p-4">Status Sewa</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="text-center w-full bg-white ring-1 ring-[#AAAAAA] inline-table my-1 rounded-lg ">
                                <td class=" w-[5%] p-4">11</td>
                                <td class=" w-[25%] p-4">Sony a6400</td>
                                <td class=" w-[10%] p-4">2</td>
                                <td class=" w-[15%] p-4">Rp. 200.000</td>
                                <td class=" w-[25%] p-4">antar jemput</td>
                                <td class="w-[20%]  p-4 text-center">
                                    <div
                                        class=" w-36 mx-auto m-2 box-border bg-[#FFF8CD] text-[#655800] rounded-lg py-1 border-2 border-[#655800]">
                                        Menunggu
                                    </div>
                                </td>
                            </tr>
                            <tr
                                class="text-center w-full bg-white border-lg ring-1 ring-[#AAAAAA] inline-table my-1 rounded-lg">
                                <td class=" w-[5%] p-4">11</td>
                                <td class=" w-[25%] p-4">Sony a6400</td>
                                <td class=" w-[10%] p-4">2</td>
                                <td class=" w-[15%] p-4">Rp. 200.000</td>
                                <td class=" w-[25%] p-4">antar jemput</td>
                                <td class="w-[20%]  p-4   text-center">
                                    <div
                                        class="w-36 mx-auto m-2 bg-[#E5FFE7] text-[#007F00] rounded-lg py-1 border-2 border-[#007F00]">
                                        Aktif
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="flex items-center -space-x-px h-8 text-sm">
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                              <span class="sr-only">Previous</span>
                              <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                              </svg>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                          </li>
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                          </li>
                          <li>
                            <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                          </li>
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                          </li>
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                          </li>
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                              <span class="sr-only">Next</span>
                              <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                              </svg>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
