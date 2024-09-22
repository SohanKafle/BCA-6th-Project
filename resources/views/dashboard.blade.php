@extends('layouts.app')
@section('content')
<h2 class="font-bold text-3xl text-amber-600">Dashboard</h2>
<hr class="h-1 bg-amber-600">

<div class="grid grid-cols-3 gap-4 mt-10">
    <div class="bg-blue-500 p-4 shadow-md rounded-lg">
        <h3 class="font-bold text-2xl text-white">Total Users</h3>
        <p class="text-4xl text-white font-bold">{{ $totalUsers }}</p>
    </div>
    <div class="bg-red-500 p-4 shadow-md rounded-lg">
        <h3 class="font-bold text-2xl text-white">Total Cars</h3>
        <p class="text-4xl text-white font-bold">{{ $totalCars }}</p>
    </div>
    <div class="bg-green-500 p-4 shadow-md rounded-lg">
        <h3 class="font-bold text-2xl text-white">Available Cars</h3>
        <p class="text-4xl text-white font-bold">{{ $availableCars }}</p>
    </div>
    <div class="bg-green-500 p-4 shadow-md rounded-lg">
        <h3 class="font-bold text-2xl text-white">Total Bookings</h3>
        <p class="text-4xl text-white font-bold">{{ $bookedCars }}</p>
    </div>
    <div class="bg-amber-600 p-4 shadow-md rounded-lg">
        <h3 class="font-bold text-2xl text-white">Total Visits</h3>
        <p class="text-4xl text-white font-bold">{{ $totalVisits }}</p>
    </div>
</div>

<div class="card mb-3">
    <div class="card-body p-3">
        <div class="chart">
            <canvas id="pie-chart" class="chart-canvas" height="300px"></canvas>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-body p-3">
        <div class="chart">
            <canvas id="line-chart" class="chart-canvas" height="300px"></canvas>
        </div>
    </div>
    @endsection
