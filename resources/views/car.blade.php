@extends('layouts.master')
@section('content')

<section class="mt-24">
    <div class="bg-gray-200 mx-auto max-w-screen-xl mt-10 p-6 rounded-md shadow-xl">
        <!-- Search Form -->
        <form action="" method="GET">
            <div class="flex flex-col md:flex-row justify-center gap-6 md:gap-10">
                <div class="flex flex-col md:flex-row gap-6">
                    <!-- Brand Input -->
                    <input type="text" name="brand" placeholder="Brand" class="block w-full md:w-auto px-4 py-2 rounded-md border border-gray-300 text-gray-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">
                    
                    <!-- Model Input -->
                    <input type="text" name="model" placeholder="Model" class="block w-full md:w-auto px-4 py-2 rounded-md border border-gray-300 text-gray-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">
                    
                    <!-- Minimum Price Input -->
                    <input type="number" name="min_price" placeholder="Min Price ($)" class="block w-full md:w-auto px-4 py-2 rounded-md border border-gray-300 text-gray-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">
                    
                    <!-- Maximum Price Input -->
                    <input type="number" name="max_price" placeholder="Max Price ($)" class="block w-full md:w-auto px-4 py-2 rounded-md border border-gray-300 text-gray-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">
                </div>

                <!-- Search Button -->
                <button type="submit" class="w-full md:w-auto bg-blue-500 text-white font-medium rounded-md px-6 py-2 hover:bg-blue-600 transition duration-300">
                    Search
                </button>
            </div>
        </form>
    </div>
</section>

@endsection
