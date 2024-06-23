@extends('layouts.master')
@section('content')

    <!-- Main Content -->
    <main class="container mx-auto mt-8 p-32">

        <div class="flex flex-wrap justify-between">
            <!-- Left Column -->
            <div class="w-full lg:w-1/2 p-4">
                <!-- Intro Section -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold mb-4">Welcome to SK Car Rental</h2>
                    <p class="mb-6">Your reliable partner for all your car rental needs. Whether you are traveling for business or leisure, we are here to provide you with top-notch vehicles and exceptional service.</p>
                </section>

                <!-- Mission Section -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold mb-4">Our Mission</h2>
                    <p class="mb-6">At SK Car Rental, our mission is to offer our customers the best car rental experience possible with high-quality vehicles and outstanding customer service.</p>
                </section>

                <section class="mb-8">
                  <h2 class="text-2xl font-bold mb-4">Details</h2>
                  <p class="mb-6"><i class="fa fa-location">Gaindakot-01,Nawalpur</i></p>
              </section>
            </div>

            <!-- Right Column -->
            <div class="w-full lg:w-1/2 p-4">
                <!-- Car Photo -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold mb-4">Our Fleet</h2>
                    <img src="https://via.placeholder.com/600x400" alt="Car Photo" class="mx-auto shadow-lg rounded-lg">
                </section>

                <!-- Map Section -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold mb-4">Our Location</h2>
                    <div class="w-full h-64">
                        <iframe class="w-full h-full rounded-lg shadow-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113018.06921452699!2d84.25646975980257!3d27.72300811451673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb6f10ab0081%3A0x11b6475201e5a810!2sGaindakot!5e0!3m2!1sen!2snp!4v1719120088167!5m2!1sen!2snp" allowfullscreen="" loading="lazy"></iframe> 
                    </div>
                </section>
            </div>
        </div>

        <!-- Team Section -->
        <section class="text-center mb-8">
            <h2 class="text-2xl font-bold mb-4">Meet Our Team</h2>
            <div class="flex justify-center space-x-20">
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member 1" class="mx-auto shadow-lg rounded-full">
                    <h3 class="mt-2 font-bold">Sohan kafle</h3>
                    <p class="text-sm">CEO</p>
                </div>
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member 2" class="mx-auto shadow-lg rounded-full">
                    <h3 class="mt-2 font-bold">Ganesh Adhikari</h3>
                    <p class="text-sm">General Manager</p>
                </div>
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member 3" class="mx-auto shadow-lg rounded-full">
                    <h3 class="mt-2 font-bold">Swastika Acharya</h3>
                    <p class="text-sm">Operation Head</p>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4 text-center">
        <p>&copy; 2024 SK Car Rental. All rights reserved.</p>
    </footer>

</body>
</html>

@endsection