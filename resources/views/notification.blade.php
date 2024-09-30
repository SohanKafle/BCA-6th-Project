@extends('layouts.app')

@section('content')

<div class="container mx-auto mt-12">
    <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-8">Booking History</h1>
    <hr class="h-0.5 bg-gray-300 mb-8">

    @if($notifications->isNotEmpty())
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 px-6">
            @foreach($notifications as $booking)
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-3">
                            {{ $booking->user->name }} booked Car {{ $booking->car->no }}
                        </h2>
                        <p class="text-sm text-gray-700 mb-4">Booking Status: <span class="font-medium">{{ $booking->status }}</span></p>
                        <div class="flex justify-between items-center mt-5">
                            <span class="text-sm font-medium text-blue-600">{{ $booking->created_at->diffForHumans() }}</span>
                        </div>
                        <a href="" class="bg-blue-600 text-white text-sm font-medium px-5 py-2 rounded-lg hover:bg-blue-700 transition duration-300 mt-6 block text-center">
                            View Details
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="mt-20">
            <p class="text-gray-700 text-center text-xl">No Booking History Found.</p>
        </div>
    @endif
</div>

@endsection
