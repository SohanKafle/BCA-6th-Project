@extends('layouts.user')
@section('content')

<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-center">Select Payment Method</h1>

    <form action="" method="POST">
        @csrf
        <div class="flex flex-col space-y-4">
            @foreach($paymentMethods as $method)
                <label class="border rounded-lg p-4 flex items-center justify-start cursor-pointer transition-transform transform hover:scale-105 shadow-md">
                    <input type="radio" name="payment_method" value="{{ $method['id'] }}" class="mr-3" required>
                    <span class="flex items-center">
                        @if($method['id'] == 1)  <!-- Assuming eSewa has id 1 -->
                            <!-- eSewa Logo SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="w-8 h-8 mr-3">
                                <path d="M100 0C44.8 0 0 44.8 0 100s44.8 100 100 100 100-44.8 100-100S155.2 0 100 0zm0 185c-46.8 0-85-38.2-85-85S53.2 15 100 15s85 38.2 85 85-38.2 85-85 85zm43-104.4c-4.1-2.3-8.4-3.5-13-3.5-7.2 0-14.2 2.8-19.2 7.8l-5.1 5.2-5.1-5.2c-5-5-12-7.8-19.2-7.8-4.6 0-8.9 1.2-13 3.5-8.3 4.6-13.4 13.3-13.4 22.9 0 3.4.4 6.6 1.1 9.7 2.5 11.5 9.7 21.2 19.4 26.6 4.8 2.5 10.2 3.9 15.9 3.9s11.1-1.4 15.9-3.9c9.7-5.4 16.9-15.1 19.4-26.6.7-3.1 1.1-6.3 1.1-9.7 0-9.5-5.1-18.3-13.4-22.9z" fill="#F8A600"/>
                            </svg>
                        @else
                            <i class="{{ $method['icon'] }} text-2xl mr-3"></i> <!-- Use Font Awesome icons -->
                        @endif
                        <span class="text-xl font-medium">{{ $method['name'] }}</span>
                    </span>
                </label>
            @endforeach
        </div>

        <div class="mt-6 text-center">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200 ease-in-out transform hover:scale-105">
                Continue
            </button>
        </div>
    </form>
</div>

@endsection
