@extends('layouts.master')
@section('content')


<!-- Home -->
<section class="home container mx-auto pt-16" id="home">
    <div class="bg-sec-100 ">
        {{-- hero --}}
        <div class="flex justify-center md:py-28 py-12 mx-auto max-w-screen-xl">
            <div class="flex  flex-col justify-center md:w-3/5  mx-12 md:ms-20 md:mx-0">
                <h1 class=" md:text-start text-center  font-car font-bold text-gray-900 mb-8  md:text-7xl text-4xl "><span class="text-purple-400"> EASY
                    </span>AND
                    FAST WAY TO RENT YOUR CAR</h1>
                <div class="md:w-3/5 md:hidden  ">
                    <img loading="lazy" src="/images/home car.png" alt="home car">
                </div>
                <p class="text-justify md:mx-0 mx-8 ">Whether you're planning a weekend
                    getaway or a cross-district adventure, we've got you covered. With our wide selection of vehicles and
                    convenient booking system, renting a car has never been this effortless.</p>
                <div class="flex justify-center md:justify-start mt-12 md:w-2/3 me-12 md:-ms-12">
                    <a href="/cars">
                        <button
                            class="bg-purple-400 p-2 border-2 border-white rounded-md text-white hover:bg-purple-500 w-32 md:me-12 md:mx-12 mx-7 font-bold ">CARS</button>
                    </a>
                    <a href="/contact_us">
                        <button class="border-2 border-purple-400 text-black w-32 p-2 rounded-md hover:bg-purple-400">CONTACT
                            US</button>
                    </a>
                </div>
            </div>
            <div class="md:w-3/5 hidden md:block  ">
                <img loading="lazy" src="/images/home car.png" alt="home car">
            </div>

        </div>
</section>

<section class="sales container mx-auto p-8" id="sales">
    <!-- Box 1 -->
    <div class="box p-4 border rounded shadow">
        <i class='bx bx-user text-4xl mb-2'></i>
        <h3 class="text-2xl font-bold mb-2">Make Your Dream True</h3>
        <p>At SK CAR RENTAL, we believe that every journey begins with a dream...</p>
    </div>
    <!-- Box 2 -->
    <div class="box p-4 border rounded shadow">
        <i class='bx bx-desktop text-4xl mb-2'></i>
        <h3 class="text-2xl font-bold mb-2">Start Your Membership</h3>
        <p>Welcome to the next level of car rental experience...</p>
    </div>
    <!-- Box 3 -->
    <div class="box p-4 border rounded shadow">
        <i class='bx bx-car text-4xl mb-2'></i>
        <h3 class="text-2xl font-bold mb-2">Enjoy Your Ride</h3>
        <p>Every turn, every stop, every mile – they all contribute to the tapestry of memories...</p>
    </div>
</section>

<!-- Properties -->
<section class="properties container mx-auto p-8" id="properties">
    <div class="heading text-center mb-8">
        <span class="text-blue-500">Recent</span>
        <h2 class="text-3xl font-bold">Our Featured Cars</h2>
        <p>Get Driven all over Nepal</p>
    </div>
    <div class="properties-container flex flex-wrap gap-8">
        <div class="box p-4 bg-white rounded-lg shadow-md">
            <img src="img/room.jpg" alt="car image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Car no:</h3>
                <div class="content">
                    <div class="text mb-2">
                        <h3 class="text-lg font-semibold">Mercedes Benz</h3>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="icon mb-2">
                        <a href="show.php" class="text-cyan-500">Show more</a>
                    </div>
                    <button class="bg-blue-500  hover:bg-blue-600 text-white py-2 px-4 rounded-full">Book</button>
                </div>
            </div>
        </div>
        <div class="box p-4 bg-white rounded-lg shadow-md">
            <img src="img/room.jpg" alt="car image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Car no:</h3>
                <div class="content">
                    <div class="text mb-2">
                        <h3 class="text-lg font-semibold">Mercedes Benz</h3>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="icon mb-2">
                        <a href="show.php" class="text-cyan-500">Show more</a>
                    </div>
                    <button class="bg-blue-500  hover:bg-blue-600 text-white py-2 px-4 rounded-full">Book</button>
                </div>
            </div>
        </div>
        <div class="box p-4 bg-white rounded-lg shadow-md">
            <img src="img/room.jpg" alt="car image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Car no:</h3>
                <div class="content">
                    <div class="text mb-2">
                        <h3 class="text-lg font-semibold">Mercedes Benz</h3>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="icon mb-2">
                        <a href="show.php" class="text-cyan-500">Show more</a>
                    </div>
                    <button class="bg-blue-500  hover:bg-blue-600 text-white py-2 px-4 rounded-full">Book</button>
                </div>
            </div>
        </div>
        <div class="box p-4 bg-white rounded-lg shadow-md">
            <img src="img/room.jpg" alt="car image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Car no:</h3>
                <div class="content">
                    <div class="text mb-2">
                        <h3 class="text-lg font-semibold">Mercedes Benz</h3>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="icon mb-2">
                        <a href="show.php" class="text-cyan-500">Show more</a>
                    </div>
                    <button class="bg-blue-500  hover:bg-blue-600 text-white py-2 px-4 rounded-full">Book</button>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!-- About -->
<section class="about container mx-auto p-8" id="about">
    <div class="about-img mb-4">
        <img src="{{ asset('img/car3.jpg') }}" alt="About Image">
    </div>
    <div class="about-text">
        <span class="text-blue-600">About Us</span>
        <h2 class="text-3xl font-bold">We Provide The Best <br>Cars For You !</h2>
        <p> Get yourself a best quality car at a best rate quoted anytime.</p>
        <p>We are The Nepal's Largest Car Rental Company...</p>
        <a href="{{ url('/about') }}" class="btn bg-blue-500 text-white py-2 px-4 rounded">Read More </a>
    </div>
</section>

@endsection