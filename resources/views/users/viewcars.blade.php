@extends('layouts.user')
@section('content')

<div class="grid grid-cols-3 gap-10 my-10 px-24">
    @foreach ($cars as $car)
    <div class="p-2 rounded-lg shadow">
        <!-- Display car image -->
        <img src="{{ asset($car->photopath) }}" alt="car" class="w-full h-64 object-cover">

        <div class="p-2">
            <!-- Car details -->
            <h2 class="text-xl font-semibold">Car No: {{ $car->car_no }}</h2>
            <h2 class="text-xl font-semibold">Name: {{ $car->name }}</h2>

            <!-- Car price and rent button -->
            <div class="flex justify-between items-center mt-4">
                <span class="text-xl font-thin">Rs. {{ $car->price }}</span>
                <a href=""><button class="bg-blue-500 text-white px-2 py-1 rounded-lg">Book</button></a>
            </div>
        </div>
    </div>
    @endforeach

    @endsection