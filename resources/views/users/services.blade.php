@extends('layouts.user')
@section('content')

 <!-- Hero Section -->
<section>
    <div class="container mx-auto mt-28">
        <h1 class="text-4xl font-bold mb-4">Our Services</h1>
        <p class="text-lg">Explore the various services we offer to make your car rental experience smooth and enjoyable.</p>
    </div>
</section>

<!-- Services Section -->
<section class="container mx-auto p-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service 1 -->
        <div class="p-6 border rounded-lg shadow-lg hover:bg-cyan-100 hover:shadow-xl hover:scale-105 transform transition-all duration-300 ease-in-out">
            <i class='bx bx-car text-4xl text-cyan-700 mb-4'></i>
            <h2 class="text-2xl font-bold mb-2">Wide Range of Cars</h2>
            <p>Choose from a diverse selection of vehicles to suit your needs, whether it's for a short trip or a long journey.</p>
        </div>
        <!-- Service 2 -->
        <div class="p-6 border rounded-lg shadow-lg hover:bg-cyan-100 hover:shadow-xl hover:scale-105 transform transition-all duration-300 ease-in-out">
            <i class='bx bx-calendar text-4xl text-cyan-700 mb-4'></i>
            <h2 class="text-2xl font-bold mb-2">Flexible Booking</h2>
            <p>Book your car rental with ease and flexibility. Modify or cancel your reservation as your plans change.</p>
        </div>
        <!-- Service 3 -->
        <div class="p-6 border rounded-lg shadow-lg hover:bg-cyan-100 hover:shadow-xl hover:scale-105 transform transition-all duration-300 ease-in-out">
            <i class='bx bx-credit-card text-4xl text-cyan-700 mb-4'></i>
            <h2 class="text-2xl font-bold mb-2">Secure Payments</h2>
            <p>Make secure payments through our reliable payment gateway. Enjoy peace of mind with every transaction.</p>
        </div>
        <!-- Service 4 -->
        <div class="p-6 border rounded-lg shadow-lg hover:bg-cyan-100 hover:shadow-xl hover:scale-105 transform transition-all duration-300 ease-in-out">
            <i class='bx bx-support text-4xl text-cyan-700 mb-4'></i>
            <h2 class="text-2xl font-bold mb-2">24/7 Customer Support</h2>
            <p>Our dedicated support team is available around the clock to assist you with any queries or issues you may have.</p>
        </div>
        <!-- Service 5 -->
        <div class="p-6 border rounded-lg shadow-lg hover:bg-cyan-100 hover:shadow-xl hover:scale-105 transform transition-all duration-300 ease-in-out">
            <i class='bx bx-briefcase text-4xl text-cyan-700 mb-4'></i>
            <h2 class="text-2xl font-bold mb-2">Corporate Rentals</h2>
            <p>Special rates and services for corporate clients. Simplify your business travel with our tailored solutions.</p>
        </div>
        <!-- Service 6 -->
        <div class="p-6 border rounded-lg shadow-lg hover:bg-cyan-100 hover:shadow-xl hover:scale-105 transform transition-all duration-300 ease-in-out">
            <i class='bx bx-map text-4xl text-cyan-700 mb-4'></i>
            <h2 class="text-2xl font-bold mb-2">Free Navigation</h2>
            <p>Enjoy complimentary navigation systems to make your journey easier and more enjoyable.</p>
        </div>
    </div>
</section>

@endsection