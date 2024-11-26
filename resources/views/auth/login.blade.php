<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 h-screen">
    <div class="flex h-full">
        <!-- Left Section: Form -->
        <div class="w-1/2 bg-white flex flex-col justify-center p-12">
            <h2 class="text-[40px] font-bold text-[#023552] mb-4 text-center">Selamat Datang Kembali!</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('auth') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="block text-[20px] text-black">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#025E93] h-14">
                </div>

                <div>
                    <label for="password" class="block text-[20px] text-black">Kata Sandi</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan kata sandi"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#025E93] h-14">
                </div>

                <div class="flex justify-center items-center">
                    <button type="submit"
                        class="w-1/2 bg-[#023552] text-[15px] text-white py-3 rounded-lg hover:bg-[#025E93] transition ">
                        Masuk
                    </button>
                </div>
            </form>

            <p class="text-black text-[20px] text-center mt-8">
                Belum memiliki akun?
                <a href="{{ route('register') }}" class="text-[#008CDC] text-[20px]">daftar disini</a>
            </p>
        </div>
        
        <!-- Right Section: Image -->
        <div class="w-1/2 bg-purple-200 flex items-center justify-center h-full">
            <img src="{{ asset('assets/images/backgroundMain.jpg') }}" alt="Illustration"
                class="h-full w-full object-cover">
        </div>
    </div>
</body>

</html>
