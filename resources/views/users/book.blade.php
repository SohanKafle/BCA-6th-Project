@extends('layouts.user')
@section('content')

<div class="mx-auto max-w-screen-xl rounded-md p-6 m-8 mt-20">
    <div class="flex justify-between md:flex-row flex-col">
        {{-- -------------------------------------------- left -------------------------------------------- --}}
        <div class="md:w-2/3 md:border-r border-gray-800 p-2">

            <h2 class="ms-4 max-w-full font-semibold md:text-6xl text-4xl">{{ $cars->name }}</h2>

            <div class="flex items-end mt-8 ms-4">
                <h3 class="text-gray-500 text-2xl">Price per day:</h3>
                <p>
                    <span class="text-3xl font-medium text-orange-600 ms-3 me-1 border border-blue-400 p-2 rounded-md">
                        Rs. {{ $cars->price }}
                    </span>
                </p>
            </div>

            <div class="flex items-center justify-around mt-10 me-10">
                <div class="w-1/5 md:w-1/3 h-[0.25px] bg-gray-500"> </div>
                <p>Order Information</p>
                <div class="w-1/5 md:w-1/3 h-[0.25px] bg-gray-500"> </div>
            </div>

            <div class="px-6 md:me-8">
                <form id="reservation_form" action="{{ route('users.selectpayment') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="car_id" value="{{ $cars->id }}">
                    <input type="hidden" name="price_per_day" value="{{ $cars->price }}">
                    <input type="hidden" name="total_price" id="total_price_input">
                    <input type="hidden" name="duration" id="duration_input">

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <div class="sm:col-span-3">
                            <label for="full-name" class="block text-sm font-medium leading-6 text-gray-900">Full Name</label>
                            <div class="mt-2">
                                <input type="text" name="full-name" id="full-name" value="{{ $user->name }}"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                            <div class="mt-2">
                                <input type="text" name="email" id="email" value="{{ $user->email }}"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="start_date" class="block text-sm font-medium leading-6 text-gray-900">Start at</label>
                            <div class="mt-2">
                                <input type="date" name="start_date" id="start_date"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6"
                                       min="{{ \Carbon\Carbon::today()->toDateString() }}" />
                            </div>
                        </div>
                        
                        <div class="sm:col-span-3">
                            <label for="end_date" class="block text-sm font-medium leading-6 text-gray-900">End at</label>
                            <div class="mt-2">
                                <input type="date" name="end_date" id="end_date"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6"
                                       min="{{ \Carbon\Carbon::today()->toDateString() }}" />
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 md:flex hidden gap-4">
                        <button type="submit" id="submit_button" disabled class="text-white bg-blue-500 p-3 w-full rounded-lg font-bold hover:bg-blue-700 shadow-xl hover:shadow-none disabled:opacity-50">
                            Book Now
                        </button>
                        <!-- Cancel Button -->
                        <button type="button" onclick="history.back()" class="text-white bg-red-500 p-3 w-full rounded-lg font-bold hover:bg-red-700 shadow-xl hover:shadow-none">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- -------------------------------------------- right -------------------------------------------- --}}

        <div class="md:w-1/3 flex flex-col justify-start items-center">
            <div class="relative mx-3 mt-3 flex h-[200px] w-3/4 overflow-hidden rounded-xl shadow-lg">
                <img loading="lazy" class="h-full w-full object-cover" src="{{ asset($cars->photopath) }}" alt="product image" />
            </div>
            <p class="ms-4 max-w-full font-bold text-xl mt-3 md:block hidden">{{ $cars->name }}</p>

            <div class="w-full mt-8 ms-8">
                <p id="duration" class="font-car text-gray-600 text-lg ms-2">Duration: <span
                        class="mx-2 f text-md font-medium text-gray-700 border border-blue-400 p-2 rounded-md">X days</span>
                </p>
            </div>

            <div class="w-full mt-8 ms-8">
                <p id="total-price" class="font-car text-gray-600 text-lg ms-2">Total Price: <span
                        class="mx-2 font-car text-md font-medium text-gray-700 border border-blue-400 p-2 rounded-md">Rs. Y</span>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    // Fetch the price per day from the blade file (cars->price)
    const pricePerDay = {{ $cars->price }};
    const submitButton = document.getElementById('submit_button');

    document.getElementById('start_date').addEventListener('change', calculateDurationAndPrice);
    document.getElementById('end_date').addEventListener('change', calculateDurationAndPrice);

    function calculateDurationAndPrice() {
        const startDate = new Date(document.getElementById('start_date').value);
        const endDate = new Date(document.getElementById('end_date').value);

        if (startDate && endDate) {
            if (startDate <= endDate) {
                // Enable submit button if dates are valid
                submitButton.disabled = false;

                // Calculate the difference in time (milliseconds) and then convert to days
                const timeDifference = endDate - startDate;
                const daysDifference = timeDifference / (1000 * 3600 * 24) + 1;

                // Calculate the total price
                const totalPrice = daysDifference * pricePerDay;

                // Update the DOM
                document.getElementById('duration').querySelector('span').innerText = `${daysDifference} days`;
                document.getElementById('total-price').querySelector('span').innerText = `Rs. ${totalPrice.toLocaleString()}`;

                // Update hidden inputs for submission
                document.getElementById('total_price_input').value = totalPrice;
                document.getElementById('duration_input').value = daysDifference;
            } else {
                // Disable submit button if end date is before start date
                submitButton.disabled = true;
                alert('End date must be after the start date.');
            }
        }
    }
</script>

@endsection
