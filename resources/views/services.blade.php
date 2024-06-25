@extends('layouts.master')
@section('content')

<div class="flex-grow">
    <div class="container mx-auto py-10 px-4 md:px-0">
        <h1 class="text-4xl font-bold text-center mb-8">Our Services</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Service Item 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center justify-center h-48 bg-blue-100 rounded-lg mb-4">
                    <i class='bx bx-car text-6xl text-blue-500'></i>
                </div>
                <h2 class="text-2xl font-bold mb-2">Car Rentals</h2>
                <p class="text-gray-700 mb-4">Affordable and reliable car rental services with a wide range of vehicles to choose from.</p>
                <a href="#" class="text-blue-500 hover:underline">Learn More</a>
            </div>
            
            <!-- Service Item 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center justify-center h-48 bg-blue-100 rounded-lg mb-4">
                    <i class='bx bx-cog text-6xl text-blue-500'></i>
                </div>
                <h2 class="text-2xl font-bold mb-2">Car Maintenance</h2>
                <p class="text-gray-700 mb-4">Expert maintenance services to keep your car in top condition.</p>
                <a href="#" class="text-blue-500 hover:underline">Learn More</a>
            </div>
            
            <!-- Service Item 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center justify-center h-48 bg-blue-100 rounded-lg mb-4">
                    <i class='bx bx-shield-quarter text-6xl text-blue-500'></i>
                </div>
                <h2 class="text-2xl font-bold mb-2">Insurance</h2>
                <p class="text-gray-700 mb-4">Comprehensive car insurance plans for complete peace of mind.</p>
                <a href="#" class="text-blue-500 hover:underline">Learn More</a>
            </div>
            
            <!-- Add more services as needed -->
        </div>
    </div>
</div>

@endsection