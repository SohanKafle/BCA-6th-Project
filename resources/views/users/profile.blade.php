<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Header Section -->
    <header class="bg-gray-800 h-16 flex items-center justify-center text-white">
        <h1 class="text-2xl font-semibold">User Profile</h1>
    </header>

    <!-- Profile Card Section -->
    <main class="mt-10">
        <div class="bg-white border border-gray-200 rounded-2xl shadow-lg max-w-xl mx-auto p-8">
            <!-- Profile Image -->
            <div class="flex justify-center mb-6">
                <img src="path_to_image.jpg" alt="Profile Image" class="h-36 w-36 rounded-full object-cover shadow-md">
            </div>

            <!-- Divider -->
            <div class="border-t border-gray-300 w-3/4 mx-auto mb-6"></div>

            <!-- Profile Info -->
            <div class="profile-info text-center space-y-4">
                <h2 class="text-3xl font-bold text-gray-900">Name: {{$user->name}}</h2>
                <h3 class="text-xl text-gray-700">Email: {{$user->email}}</h3>
                <h3 class="text-xl text-gray-700">Phone Number: {{$user->phone}}</h3>
                <h3 class="text-xl text-gray-700">DOB: {{$user->dob}}</h3>
            </div>

            <!-- Buttons -->
            <div class="mt-8 space-y-4">
                <!-- Edit Profile Button -->
                <div class="text-center">
                    <a href="{{route('users.edit')}}" class="py-2 px-6 bg-gray-800 text-white rounded-full shadow-md hover:bg-blue-600 transition-colors font-semibold">Edit Profile</a>
                </div><br>
                <!-- Back Button -->
                <div class="text-center">
                    <a href="{{route('users.index')}}" class="py-2 px-6 bg-gray-800 text-white rounded-full shadow-md hover:bg-blue-600 transition-colors font-semibold">Back</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
