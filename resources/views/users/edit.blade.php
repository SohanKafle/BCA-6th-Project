<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Header Section -->
    <header class="bg-gray-800 h-16 flex items-center justify-center text-white">
        <h1 class="text-2xl font-semibold">Edit Profile</h1>
    </header>

    <!-- Edit Profile Form -->
    <main class="mt-10">
        <div class="bg-white border border-gray-200 rounded-2xl shadow-lg max-w-2xl mx-auto p-8">

            <!-- Profile Image Upload Section -->
            <div class="flex justify-center mb-6">
                <img src="{{ $user->photopath ? asset('images/users/'.$user->photopath) : 'path_to_default_image.jpg' }}" 
                     alt="Profile Image" class="h-36 w-36 rounded-full object-cover shadow-md">
            </div>

            <form action="{{ route('users.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf <!-- Laravel's built-in CSRF token protection -->

                <!-- Upload Profile Image -->
                <div class="text-center mb-6">
                    <input type="file" name="photopath" class="py-2 px-4 bg-gray-600 text-white rounded-full shadow hover:bg-blue-600 transition-colors">
                </div>

                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-lg font-semibold text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" 
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-lg font-semibold text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" 
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Phone Number Field -->
                <div>
                    <label for="phone" class="block text-lg font-semibold text-gray-700">Phone Number</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone', $user->phone) }}" 
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                     <!-- Date of Birth Field -->
                     <div>
                        <label for="dob" class="block text-lg font-semibold text-gray-700">DOB</label>
                        <input type="text" id="dob" name="dob" value="{{ old('dob', $user->dob) }}" 
                               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="py-2 px-6 bg-gray-800 text-white rounded-full shadow-md hover:bg-blue-600 transition-colors font-semibold">
                        Save Changes
                    </button>
                </div>
            </form>

            <!-- Cancel Button -->
            <div class="text-center mt-4">
                <a href="{{ route('users.index') }}" class="inline-block py-2 px-6 bg-gray-600 text-white rounded-full shadow-md hover:bg-red-600 transition-colors font-semibold">
                    Cancel
                </a>
            </div>

        </div>
    </main>

</body>
</html>
