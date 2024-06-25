<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body class="h-screen bg-purple-100">
    <div class="min-h-full grid grid-cols-1 md:grid-cols-2">
        <div class="relative">
            <a href="{{ route('home') }}" class="absolute top-4 left-4 bg-blue-500 hover:bg-blue-900 text-white px-2 py-3 rounded-lg z-10">Go Home</a>
            <img src="{{ asset('img/car.png') }}" alt="Register Image" class="w-full h-full object-cover shadow-lg">
        </div>
        <div class="flex items-center justify-center">
            <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
                <h2 class="font-bold text-2xl mb-5 text-center">Register for SK Car Rental</h2>
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Name" name="name" required>
                    <input type="email" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Email" name="email" required>
                    <input type="text" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Phone Number" name="phone" required>
                    <input type="password" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Password" name="password" required>
                    <input type="password" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Confirm Password" name="password_confirmation" required>
                    <div class="border border-gray-300 p-2 w-full mt-4 rounded-lg">
                        <label for="photo" class="block text-gray-700">Upload Photo</label>
                        <input type="file" id="photo" name="photo" class="w-full mt-2" accept="image/*">
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-900 transition-colors text-white py-2 w-full rounded-lg mt-4">Register</button>
                </form>
                <p class="text-center mt-4">
                    Already have an account? <a href="{{ route('login') }}" class="text-blue-500">Login</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
