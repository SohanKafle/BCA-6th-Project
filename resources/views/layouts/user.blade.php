<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SK CAR RENTAL</title>
    <link rel="shortcut icon" href="{{ asset('img/weblogo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .footer-line {
            border-top: 1px solid gray;
            margin-top: 1px;
        }
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: #007BFF; /* Specific blue color */
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            line-height: 50px;
            text-align: center;
            cursor: pointer;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }
        .back-to-top:hover {
            background-color: #0056b3;
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
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
                            <form action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</button>
                            </form>


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
   <footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 px-4 md:px-0">
        <!-- About Us -->
        <div class="lg:col-span-2">
            <h3 class="font-bold mb-2 ml-5">About Us</h3>
            <p class="text-gray-400 ml-5">
                Established in 2023, SK CAR RENTAL stands as Nepal's best CAR rental company, offering an unparalleled experience in travel. We are The Nepal's Largest Car Rental Company. With 100s of fleets and best customer service. We offer you the best of class service. Remember us for anytime, anywhere to rent a car and drive yourself anywhere.
            </p>
        </div>
        <!-- Contact Info -->
        <div>
            <h3 class="font-bold mb-2">Contact Info</h3>
            <ul class="text-gray-400 ">
                <li class="flex items-center mb-3 hover:text-blue-400">
                    <i class='bx bx-map mr-2'></i> Gaindakot-01, Nawalpur
                </li>
                <li class="flex items-center mb-3 hover:text-blue-400">
                    <i class='bx bx-phone mr-2'></i> 078-7501202 / 9812211443
                </li>
                <li class="flex items-center mb-3 hover:text-blue-400">
                    <i class='bx bx-envelope mr-2'></i> info@skcarrental.com
                </li>
            </ul>
        </div>
        <!-- Quick Links -->
        <div>
            <h3 class="font-bold mb-2">Quick Links</h3>
            <ul>
                <li class="mb-2"><a href="{{ route('users.index') }}" class="hover:text-blue-400">Home</a></li>
                <li class="mb-2"><a href="{{ route('users.about') }}" class="hover:text-blue-400">About Us</a></li>
                <li class="mb-2"><a href="{{ route('users.services') }}" class="hover:text-blue-400">Our Services</a></li>
            </ul>
        </div>
        <!-- Social Network -->
        <div>
            <h3 class="font-bold mb-2">Follow Us On</h3>
            <div class="flex space-x-4">
                <a href="https://www.facebook.com/sohanmessi10" class="hover:text-blue-400"><i class='bx bxl-facebook'></i></a>
                <a href="https://twitter.com/SohanKafle" class="hover:text-blue-400"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.instagram.com/sohan_lm10/" class="hover:text-blue-400"><i class='bx bxl-instagram'></i></a>
                <a href="https://www.linkedin.com/in/sohan-kafle/" class="hover:text-blue-400"><i class='bx bxl-linkedin'></i></a>
            </div>
        </div>
    </div>
</footer>
<div class="footer-line"></div>
<div class="copyright text-center bg-gray-900 text-white py-2">
    <p>&#169; All Rights Reserved SKCARRENTAL</p>
</div>

  {{-- <------------------------Back to Top Button----------------------------------> --}}
    <button class="back-to-top" onclick="scrollToTop()"><i class="bx bx-up-arrow-alt"></i></button>

    <script>
        window.onscroll = function() {
            let button = document.querySelector('.back-to-top');
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                button.style.display = 'block';
            } else {
                button.style.display = 'none';
            }
        };

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>

</body>

</html>
