@extends('layouts.user')
@section('content')

<div class="container mx-auto py-12 mt-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Left: Booking Details -->
        <div class="border rounded-lg p-6 shadow-md bg-white">
            <h2 class="text-2xl font-bold mb-4">Booking Details</h2>

            <div class="mb-4">
                <span class="block text-lg font-medium">Car Model:</span>
                {{-- <span class="text-gray-700">{{ $cars->name }}</span> --}}
            </div>

            <div class="mb-4">
                <span class="block text-lg font-medium">Pick-Up Date:</span>
                {{-- <span class="text-gray-700">{{ $booking->start_date }}</span> --}}
            </div>

            <div class="mb-4">
                <span class="block text-lg font-medium">Drop-Off Date:</span>
                {{-- <span class="text-gray-700">{{ $booking->end_date }}</span> --}}
            </div>

            <div class="mb-4">
                <span class="block text-lg font-medium">Total Price:</span>
                {{-- <span class="text-gray-700">Rs. {{ $booking->total_price }}</span> --}}
            </div>
        </div>

        <!-- Right: Payment Methods -->
        <div class="border rounded-lg p-6 shadow-md bg-white">
            <h2 class="text-2xl font-bold mb-4 text-center">Select Payment Method</h2>

            <form action="" method="POST">
                @csrf
                <div class="flex flex-col space-y-4">
                    @foreach($paymentMethods as $method)
                        <label class="border rounded-lg p-4 flex items-center justify-start cursor-pointer transition-transform transform hover:scale-105 shadow-md">
                            <input type="radio" name="payment_method" value="{{ $method['id'] }}" class="mr-3" required>
                            <span class="flex items-center">
                                <i class="{{ $method['icon'] }} text-2xl mr-3"></i>
                                <span class="text-xl font-medium">{{ $method['name'] }}</span>
                            </span>
                        </label>
                    @endforeach
                </div>

                <div class="mt-6 text-center">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200 ease-in-out transform hover:scale-105">
                        Continue to Payment
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
