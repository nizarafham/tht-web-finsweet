<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{Findsweet</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#4C4C4C]">
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white shadow-md rounded-lg p-8 w-96">
            <form method="POST" action="{{ route('sign-in.post') }}">
                @csrf
                <h2 class="text-2xl font-bold text-[#232536] mb-4">Sign In</h2>

                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div class="mb-4">
                    <label for="email" class="block text-[#232536]">Email</label>
                    <input type="email" name="email" id="email" class="w-full border border-gray-300 p-2 rounded" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-[#232536]">Password</label>
                    <input type="password" name="password" id="password" class="w-full border border-gray-300 p-2 rounded" required>
                </div>

                <button type="submit" class="bg-[#FFD050] text-white font-bold w-full py-2 rounded hover:bg-[#592EA9]">
                    Sign In
                </button>
            </form>
            <div class="text-center mt-4">
                <a href="{{ route('sign-up') }}" class="text-[#FFD050] hover:text-[#592EA9]">Register?</a>
            </div>
        </div>
    </div>
</body>
</html>
