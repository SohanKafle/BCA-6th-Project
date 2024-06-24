<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SK CAR RENTAL</title>
    <link rel="shortcut icon" href="{{ asset('img/car10.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <header class="bg-white">
        <nav class="bg-gray-100 shadow-md fixed top-0 left-0 w-full ">
            <div class="container mx-auto flex justify-between items-center py-4">
                <!-- Logo -->
                <a href="{{ route('home') }}"> <img
                        src="https://github.com/SohanKafle/BCA-4th-Project/blob/main/img/logoo.png?raw=true"
                        alt="CarRental Logo" class="h-16"></a>

                <!-- Navigation Links -->
                <ul class="flex gap-10 items-center">
                    <li>
                        <a href="/"
                            class=" text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-home'></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-user'></i>
                            <span>About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}"
                            class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-list-ul'></i>
                            <span>Our Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-envelope'></i>
                            <span>Contact Us</span>
                        </a>
                    </li>
                </ul>

                <!-- Login Button -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <div class="relative inline-block text-left">
                    <!-- Dropdown trigger image -->
                    <img id="dropdownDefaultButton" src="path/to/your/image.jpg" alt="Dropdown trigger" class="cursor-pointer w-10 h-10 rounded-full mr-80">

                    <!-- Dropdown menu -->
                    <div id="dropdown" class="absolute left-0 mt-2 z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{ route('users.profile') }}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Rooms</a>
                            </li>
                            <li>
                                <a href="/logout"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</a>
                            </li>


                        </ul>
                    </div>
                </div>

                <script>
                    document.getElementById('dropdownDefaultButton').addEventListener('click', function() {
                        var dropdown = document.getElementById('dropdown');
                        if (dropdown.classList.contains('hidden')) {
                            dropdown.classList.remove('hidden');
                        } else {
                            dropdown.classList.add('hidden');
                        }
                    });

                    // Optional: Hide the dropdown when clicking outside
                    document.addEventListener('click', function(event) {
                        var dropdownButton = document.getElementById('dropdownDefaultButton');
                        var dropdown = document.getElementById('dropdown');
                        if (!dropdownButton.contains(event.target) && !dropdown.contains(event.target)) {
                            dropdown.classList.add('hidden');
                        }
                    });
                </script>

        </nav>

    </header>
    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 ">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="flex items-center justify-center md:justify-start">
                <img src="https://miro.medium.com/v2/resize:fit:2400/1*pZ9AXb5podkfpxGFJP7yeg.jpeg" alt="SK CAR RENTAL"
                    class="h-20 ml-3 rounded-lg">
            </div>
            <div>
                <h3 class="font-bold mb-2">Quick Links</h3>
                <ul>
                    <li class="mb-1"><a href="{{ url('/') }}" class="hover:text-blue-400">Home</a></li>
                    <li class="mb-1"><a href="{{ url('/about') }}" class="hover:text-blue-400">About Us</a></li>
                    <li class="mb-1"><a href="{{ url('/services') }}" class="hover:text-blue-400">Our Services</a>
                    </li>
                    <li class="mb-1"><a href="{{ url('/admin') }}" class="hover:text-blue-400">Admin Login</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-2">Locations</h3>
                <ul>
                    <li class="mb-1"><a href="#" class="hover:text-blue-400 ">Nawalpur</a></li>
                    <li class="mb-1"><a href="#" class="hover:text-blue-400 ">Chitwan</a></li>
                    <li class="mb-1"><a href="#" class="hover:text-blue-400 ">Kathmandu</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-2">Contact</h3>
                <ul>
                    <li class="mb-1"><a href="tel:+9779812211443" class="hover:text-blue-400">+977 9812211443</a></li>
                    <li><a href="mailto:kaflesohan1@gmail.com" class="hover:text-blue-400">kaflesohan1@gmail.com</a>
                    </li>
                </ul>
                <div class="flex space-x-4 mt-4">
                    <a href="https://www.facebook.com/sohanmessi10" class="hover:text-blue-400"><i
                            class='bx bxl-facebook'></i></a>
                    <a href="https://twitter.com/SohanKafle" class="hover:text-blue-400"><i
                            class='bx bxl-twitter'></i></a>
                    <a href="https://www.instagram.com/sohan_lm10/" class="hover:text-blue-400"><i
                            class='bx bxl-instagram'></i></a>
                    <a href="https://www.linkedin.com/in/sohan-kafle/" class="hover:text-blue-400"><i
                            class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright text-center bg-gray-900 text-gray-400 py-2">
        <p>&#169; All Rights Reserved SKCARRENTAL</p>
    </div>


</body>

</html>
