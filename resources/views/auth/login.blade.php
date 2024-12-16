<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReKonser - Masuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="icon" href="{{ asset('assets/images/icontitle.png') }}" type="image/x-icon">
</head>

<body class="bg-gray-100 h-screen">
    <div class="flex h-full" >
        <div class="w-1/2 bg-white flex flex-col justify-center p-12">
            <h2 class="text-[40px] font-bold text-[#023552] mb-4 text-center" data-aos="fade-up">Selamat Datang Kembali!</h2>
            @if (session()->has('error'))
                <div
                    class="w-full h-[50px] rounded-lg p-3 bg-[#FFE5E5]  flex items-center border-2 border-[#7F0000] mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-[#7F0000]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
                    </svg>
                    <div class="text-[#7F0000]">{{ session('error') }}</div>
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="flex flex-col gap-3" data-aos="fade-up">
                    <div class="text-black text-[20px] font-semibold">Email
                        <input type="email" id="email" name="email" placeholder="Masukkan email"
                            class="w-full border text-[16px] font-normal border-gray-300 rounded-lg px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#025E93] h-12 @error('email')is invalid @enderror">
                        @error('email')
                            <div class="text-[#7F0000] font-normal text-[14px] mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-black text-[20px] font-semibold">Kata Sandi
                        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi"
                            class="w-full border text-[16px] font-normal border-gray-300 rounded-lg px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#025E93] h-12 @error('password')is invalid @enderror">
                        @error('password')
                            <div class="text-[#7F0000] font-normal text-[14px] mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex justify-center items-center">
                        <button type="submit"
                            class="w-[200px]  bg-[#023552] text-[18px] text-white py-2 rounded-lg hover:bg-[#025E93] transition ">
                            Masuk
                        </button>
                    </div>
                </div>
            </form>
            <p class="text-black text-[16px] text-center mt-8" data-aos="fade-up">
                Belum memiliki akun?
                <a href="{{ route('register') }}" class="text-[#266CA9] text-[16px] hover:underline">daftar
                    disini</a>
            </p>
        </div>
        <div class="w-1/2 bg-purple-200 flex items-center justify-center h-full">
            <img src="{{ asset('assets/images/backgroundMain.jpg') }}" alt="Illustration"
                class="h-full w-full object-cover">
        </div>
        <script>
            AOS.init();
        </script>
    </div>
</body>

</html>
