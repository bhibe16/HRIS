<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css') <!-- Include your CSS -->
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl mb-4">Login</h2>
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block">Email:</label>
                <input type="email" name="email" id="email" class="border w-full p-2" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block">Password:</label>
                <input type="password" name="password" id="password" class="border w-full p-2" required>
            </div>
            <button type="submit" class="bg-blue-600 text-white w-full p-2 rounded">Login</button>
        </form>
        @if ($errors->any())
            <div class="mt-4 text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
