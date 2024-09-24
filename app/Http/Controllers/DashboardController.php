<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Get total number of users
        $totalUsers = User::count();

        // Get total number of cars
        $totalCars = Car::count();

        // Get available cars based on the 'availability' status
        $availableCars = Car::where('availability', 1)->count();

        // Calculate booked cars
        $bookedCars = $totalCars - $availableCars;

        // Assuming total visits is fetched from a static or external source
        $totalVisits = 30000; // Replace this with actual logic if needed

        $bookingData = Car::selectRaw('MONTH(created_at) as month, COUNT(*) as bookings')
            ->groupBy('month')
            ->pluck('bookings')->toArray();

        // Fetch car types (or categories) and their counts
        $carTypes = Car::select('name as type')
            ->groupBy('type')
            ->pluck('type')->toArray();

        $carCounts = Car::selectRaw('name as type, COUNT(*) as count')
            ->groupBy('type')
            ->pluck('count')->toArray();

        return view('dashboard', compact('totalUsers', 'totalCars', 'availableCars', 'bookedCars', 'totalVisits', 'bookingData', 'carTypes', 'carCounts'));
    }


}
