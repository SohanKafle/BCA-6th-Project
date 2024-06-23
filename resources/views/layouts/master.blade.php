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
               <a href="{{route('home')}}"> <img src="https://github.com/SohanKafle/BCA-4th-Project/blob/main/img/logoo.png?raw=true" alt="CarRental Logo" class="h-16"></a>
                
                <!-- Navigation Links -->
                <ul class="flex gap-10 items-center">
                    <li>
                        <a href="/" class=" text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-home'></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('about')}}" class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-user'></i>
                            <span>About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('services')}}" class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-list-ul'></i>
                            <span>Our Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}" class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-envelope'></i>
                            <span>Contact Us</span>
                        </a>
                    </li>
                </ul>
                
                <!-- Login Button -->
                <div class="flex items-center  lg:order-2">
                    <a href="{{ route('login') }}">
                        <button type="button"
                            class=" px-4 lg:px-5 py-2 lg:py-2.5 mr-2 text-white bg-gradient-to-br from-purple-500 to-purple-400 hover:bg-gradient-to-bl font-medium rounded-lg text-sm ">
                            Login
                        </button>

                    </a>
                    <a href="{{ route('register') }}">
                        <button
                            class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 ">
                            <span
                                class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-sec-600 dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                Register
                            </span>
                        </button>

                    </a>
            </div>
        </nav>
        
    </header>
@yield('content')

 <!-- Footer -->
 <footer class="bg-gray-900 text-white py-8 ">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="flex items-center justify-center md:justify-start">
            <img src="https://miro.medium.com/v2/resize:fit:2400/1*pZ9AXb5podkfpxGFJP7yeg.jpeg" alt="SK CAR RENTAL" class="h-20 ml-3 rounded-lg">
        </div>
        <div>
            <h3 class="font-bold mb-2">Quick Links</h3>
            <ul>
                <li class="mb-1"><a href="{{ url('/') }}" class="hover:text-blue-400">Home</a></li>
                <li class="mb-1"><a href="{{ url('/about') }}" class="hover:text-blue-400">About Us</a></li>
                <li class="mb-1"><a href="{{ url('/services') }}" class="hover:text-blue-400">Our Services</a></li>
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
                <li><a href="mailto:kaflesohan1@gmail.com" class="hover:text-blue-400">kaflesohan1@gmail.com</a></li>
            </ul>
            <div class="flex space-x-4 mt-4">
                <a href="https://www.facebook.com/sohanmessi10" class="hover:text-blue-400"><i class='bx bxl-facebook'></i></a>
                <a href="https://twitter.com/SohanKafle" class="hover:text-blue-400"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.instagram.com/sohan_lm10/" class="hover:text-blue-400"><i class='bx bxl-instagram'></i></a>
                <a href="https://www.linkedin.com/in/sohan-kafle/" class="hover:text-blue-400"><i class='bx bxl-linkedin'></i></a>
            </div>
        </div>
    </div>
</footer>

<div class="copyright text-center bg-gray-900 text-gray-400 py-2">
    <p>&#169; All Rights Reserved SKCARRENTAL</p>
</div>


</body>
</html>
