@extends('layouts.user')
@section('content')

     <!-- Main Content -->
<section class="relative bg-cover bg-center h-64" style="background-image: url('{{ asset('img/fun.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-50"></div> <!-- For dark overlay -->
    <div class="relative flex justify-center items-center h-full">
        <h1 class="text-white text-5xl font-bold">About Us</h1>
    </div>
</section>

<!-- Main Content Area -->
<main class="container mx-auto px-4 py-8 lg:px-32 lg:py-16">
    <div class="flex flex-col lg:flex-row lg:gap-x-8"> <!-- Added gap between left and right columns -->
        <!-- Left Column -->
        <div class="w-full lg:w-1/2">
            <!-- Intro Section -->
            <section class="mb-6">
                <h2 class="text-2xl font-bold mb-4 text-cyan-700">Welcome to SK Car Rental</h2>
                <p class="mb-6">Your reliable partner for all your car rental needs. Whether you are traveling for business or leisure, we are here to provide you with top-notch vehicles and exceptional service.</p>
            </section>

            <!-- Mission Section -->
            <section class="mb-6">
                <h2 class="text-2xl font-bold mb-4 text-cyan-700">Our Mission</h2>
                <p class="mb-6">At SK Car Rental, our mission is to offer our customers the best car rental experience possible with high-quality vehicles and outstanding customer service.</p>
            </section>

            <!-- Why are we the best Section -->
            <section class="mb-6">
                <h2 class="text-2xl font-bold mb-4 text-cyan-700">Why are we the best?</h2>
                <p class="mb-6">We are Nepal's largest car rental company. With 100s of fleets and the best customer service, we offer you the best-in-class service. Remember us for anytime, anywhere to rent a car and drive yourself anywhere.</p>
                <p class="mb-6">With our experience and the highest number of fleets, get yourself a quality vehicle at the best rate. Book your next drive across Nepal easily through our highly technological marketplace, certified with ISO:9001 2005 standards, ensuring 24/7 customer safety.</p>
            </section>
        </div>

        <!-- Right Column (Fleet and Map Section) -->
        <div class="w-full lg:w-1/2">
            <!-- Car Photo Section -->
            <section class="mb-6">
                <h2 class="text-2xl font-bold mb-4 text-cyan-700">Our Fleet</h2>
                <img src="{{asset('img/Mercedes.jpg')}}" alt="Car Photo" class="mx-auto shadow-lg rounded-lg">
            </section>

            <!-- Map Section -->
            <section class="mb-6">
                <h2 class="text-2xl font-bold mb-4 text-cyan-700">Our Location</h2>
                <div class="w-full h-64">
                    <iframe class="w-full h-full rounded-lg shadow-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113018.06921452699!2d84.25646975980257!3d27.72300811451673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb6f10ab0081%3A0x11b6475201e5a810!2sGaindakot!5e0!3m2!1sen!2snp!4v1719120088167!5m2!1sen!2snp" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>
        </div>
    </div>

    <!-- Team Section -->
    <section class="text-center mb-6">
        <h2 class="text-2xl font-bold mb-4 text-cyan-700">Meet Our Team</h2>
        <div class="flex flex-wrap justify-center space-y-8 lg:space-y-0 lg:space-x-20">
            <div class="text-center w-full sm:w-1/2 md:w-1/3 lg:w-auto">
                <img src="{{asset('img/sohann.jpg')}}" alt="Team Member 1" class="mx-auto shadow-lg rounded-full w-40 h-40 object-cover">
                <h3 class="mt-2 font-bold">Sohan Kafle</h3>
                <p class="text-sm">CEO</p>
            </div>
            <div class="text-center w-full sm:w-1/2 md:w-1/3 lg:w-auto">
                <img src="{{asset('img/aak.jpg')}}" alt="Team Member 2" class="mx-auto shadow-lg rounded-full w-40 h-40 object-cover">
                <h3 class="mt-2 font-bold">Ganesh Adhikari</h3>
                <p class="text-sm">General Manager</p>
            </div>
            <div class="text-center w-full sm:w-1/2 md:w-1/3 lg:w-auto">
                <img src="{{asset('img/swo.jpg')}}" alt="Team Member 3" class="mx-auto shadow-lg rounded-full w-40 h-40 object-cover">
                <h3 class="mt-2 font-bold">Swastika Acharya</h3>
                <p class="text-sm">Operation Head</p>
            </div>
        </div>
    </section>
</main>

@endsection
