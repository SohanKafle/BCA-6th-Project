@extends('layouts.master')
@section('content')


<!-- Home -->
<section class="home container mx-auto pt-16" id="home">
    <div class="bg-purple-100 ">
        {{-- hero --}}
        <div class="flex justify-center md:py-28 py-12 mx-auto max-w-screen-xl">
            <div class="flex  flex-col justify-center md:w-3/5  mx-12 md:ms-20 md:mx-0">
                <h1 class=" md:text-start text-center  font-car font-bold text-gray-900 mb-8  md:text-7xl text-4xl "><span class="text-purple-400"> EASY
                    </span>AND
                    FAST WAY TO RENT YOUR CAR</h1>
                    <div class="md:w-3/5 md:hidden  ">
                        <img loading="lazy" src="{{asset('img/Ford_Mustang.jpg/')}}" alt="home car">
                    </div>
                <p class="text-justify md:mx-0 mx-8 ">Whether you're planning a weekend
                    getaway or a cross-district adventure, we've got you covered. With our wide selection of vehicles and
                    convenient booking system, renting a car has never been this effortless.</p>
                <div class="flex justify-center md:justify-start mt-12 md:w-2/3 me-12 md:-ms-12">
                    <a href="{{route('car')}}">
                        <button
                            class="bg-purple-400 p-2 border-2 border-white rounded-md text-white hover:bg-purple-500 w-32 md:me-12 md:mx-12 mx-7 font-bold ">CARS</button>
                    </a>
                    <a href="{{route('contact')}}">
                        <button class="border-2 border-purple-400 text-black w-32 p-2 rounded-md hover:bg-purple-400">CONTACT
                            US</button>
                    </a>
                </div>
            </div>
            <div class="md:w-3/5 hidden md:block">
                <img loading="lazy" src="{{ asset('img/Ford_Mustang.jpg') }}" class="rounded-[500px] w-11/12 h-auto mx-6" alt="home car">
            </div>

        </div>
</section>
<section class="sales container mx-auto p-8" id="sales">
    <!-- Box Container -->
    <div class="grid gap-4 md:grid-cols-3">
        <!-- Box 1 -->
        <div class="box p-4 border rounded shadow transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-gray-100">
            <img src="{{asset('img/DCT.jpg') }}" alt="Dreams Come True">
            <h3 class="text-2xl font-bold mb-2">Make Your Dream True</h3>
            <p>At SK CAR RENTAL, we believe that every journey begins with a dream...</p>
        </div>
        <!-- Box 2 -->
        <div class="box p-4 border rounded shadow transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-gray-100">
            <img src="{{asset('img/mem.jpg') }}" alt="Membership">
            <h3 class="text-2xl font-bold mb-2">Start Your Membership</h3>
            <p>Welcome to the next level of car rental experience...</p>
        </div>
        <!-- Box 3 -->
        <div class="box p-4 border rounded shadow transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-gray-100">
            <img src="{{asset('img/eyr.jpg') }}" alt="Enjoy">
            <h3 class="text-2xl font-bold mb-2">Enjoy Your Ride</h3>
            <p>Every turn, every stop, every mile – they all contribute to the tapestry of memories...</p>
        </div>
    </div>
</section>

    <!-- Properties -->
    <section class="properties container mx-auto py-16" id="properties">
    
        <div class="mx-auto max-w-screen-xl">
            <div class="flex align-middle justify-center">
                <hr class=" mt-8 h-0.5 w-2/5 bg-pink-500">
                <p class="my-2 mx-8  p-2 font-car font-bold text-black-400 text-lg ">CARS</p>
                <hr class=" mt-8 h-0.5 w-2/5 bg-pink-500">
                <hr>
            </div>
            <div class="   md:mr-16 mr-4 mb-4 flex justify-end">
                <a href="{{route('car')}}">
                    <button class="border-2 border-black font-medium text-black w-16 p-1 rounded-md hover:bg-blue-400 hover:text-white">See
                        All</button>
                </a>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-10 my-10 px-24">

            @foreach($cars as $car) 
            <div class="p-2 rounded-lg shadow">
                <!-- Display car image -->
                <img src="{{ asset($car->photopath) }}" alt="car" class="w-full h-64 object-cover">
                
                <div class="p-2">
                    <!-- Car details -->
                    <h2 class="text-xl font-semibold">Car No: {{$car->car_no}}</h2>
                    <h2 class="text-xl font-semibold">Name: {{$car->name}}</h2>
    
                    <!-- Car price and rent button -->
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-xl font-thin">Rs. {{$car->price}}</span>
                        <a href="{{route('login')}}"><button class="bg-blue-500 text-white px-2 py-1 rounded-lg">Book</button></a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

<!-- About -->
<section class="about container ">
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden  mx-auto flex flex-col md:flex-row">
        <img src="{{asset('img/car.png')}}" alt="Car Image" class="w-full md:w-1/2 h-auto object-cover rounded-lg">
        <div class="p-8 md:w-1/2">
            <h2 class="text-3xl font-bold text-red-600 mb-4">Hiring a car? You're at the right place.</h2>
            <h3 class="text-3xl font-semibold text-blue-700 mb-4">SK Car Rental, तपाइको यात्राको सहयात्री।</h3>
            <p class="text-gray-600 mb-4">Get yourself a best quality car at a best rate quoted anytime.</p>
            <p class="text-gray-600 mb-6">We are Nepal's Largest Car Rental Company. With hundreds of fleets and best customer service, we offer you the best of class service.</p>
            <a href="{{route('about')}}" class="inline-block bg-blue-500  hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Read More</a>
        </div>
    </div>
</section>
@endsection