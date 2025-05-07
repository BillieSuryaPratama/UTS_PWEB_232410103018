<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlayLog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="background-color: #333333;" class="flex items-center justify-center min-h-screen">
    <div style="background-color: #555555;" class="w-full max-w-sm p-8 rounded shadow-2xl">
        <h1 class="text-2xl text-white font-bold mb-6 text-center">Login</h1>
        <form action="{{ route('login.Autentikasi') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <p class="block mb-1 text-white">Username</p>
                <input type="text" name="username" required class="w-full border border-[#555555] p-2 rounded focus:outline-none focus:ring-2 focus:ring-[#0cbd66]">
            </div>
            <div>
                <p class="block mb-1 text-white">Password</p>
                <input type="password" name="password" required class="w-full border border-[#555555] p-2 rounded focus:outline-none focus:ring-2 focus:ring-[#0cbd66]">
            </div>
            <input name="submit" type="submit" value="Login" style="background-color: #0cbd66" class="w-full text-white py-2 rounded hover:bg-blue-600 cursor-pointer">
        </form>
    </div>
</body>
</html>
