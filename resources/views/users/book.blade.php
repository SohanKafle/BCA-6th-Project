@extends('layouts.user')
@section('content')

    <!-- Car Information Section -->
    <section class="container mx-auto mt-20">
        <div class="bg-gray-800 text-white  shadow-lg overflow-hidden md:flex">
            <!-- Car Image -->
            <div class="w-full md:w-1/2">
                <img src="{{ asset($cars->photopath) }}" alt="{{ $cars->name }} Image" class="w-full h-full object-cover">
            </div>
            
            <!-- Car Details and Booking Form -->
            <div class="p-6 md:w-1/2">
                <!-- Car Title -->
                <h2 class="text-3xl font-bold mb-4">{{ $cars->name }}</h2>
                
                <!-- Car Details -->
                <p class="mb-2"><span class="font-semibold">Car Number:</span> {{ $cars->car_no }}</p>
                <p class="mb-2"><span class="font-semibold">Price per Day:</span> Rs. {{ number_format($cars->price, 2) }}</p>
                <p class="mb-2">
                    <span class="font-semibold">Availability:</span>
                    {{ $cars->availability > 0 ? 'Available' : 'Currently Unavailable' }}
                </p>
                
                <!-- Car Description -->
                <h4 class="text-lg font-semibold mt-4">About this Car</h4>
                <p class="mt-2 leading-relaxed">{{ $cars->description }}</p>

                <!-- Booking Form -->
                <form action="" method="POST" class="mt-6">
                    @csrf <!-- Laravel CSRF Protection -->
                    <input type="hidden" name="car_id" value="{{ $cars->id }}">
                    
                    <!-- Booking Details -->
                    <div class="grid gap-4 mb-4">
                        <div>
                            <label for="pickup_city" class="block mb-1 text-sm font-medium">Pickup City</label>
                            <input type="text" id="pickup_city" name="pickup_city" placeholder="Enter Pickup Location" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring focus:ring-blue-300" required>
                        </div>
                        
                        <div>
                            <label for="pickup_date" class="block mb-1 text-sm font-medium">Pickup Date</label>
                            <input type="date" id="pickup_date" name="pickup_date" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring focus:ring-blue-300" required>
                        </div>
                        
                        <div>
                            <label for="arrival_date" class="block mb-1 text-sm font-medium">Arrival Date</label>
                            <input type="date" id="arrival_date" name="arrival_date" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring focus:ring-blue-300" required>
                        </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition-colors duration-300">Confirm Booking</button>
                </form>
            </div>
        </div>
    </section>

@endsection
