<?php

namespace App\Http\Controllers;

use App\Models\book;
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

        $availableCars = Car::where('availability', '>', 0)->count();

        // Calculate booked cars (assumes cars with availability = 0 are booked)
        $bookedCars = Car::where('availability', 0)->count();

        // Assuming total visits is fetched from a static or external source
        $totalVisits = 30000; // Replace this with actual logic if needed

        // $bookingData = Car::selectRaw('MONTH(created_at) as month, COUNT(*) as bookings')
        //     ->groupBy('month')
        //     ->pluck('bookings')->toArray();

        // // Fetch car types (or categories) and their counts
        // $carTypes = Car::select('name as type')
        //     ->groupBy('type')
        //     ->pluck('type')->toArray();

        // $carCounts = Car::selectRaw('name as type, COUNT(*) as count')
        //     ->groupBy('type')
        //     ->pluck('count')->toArray();

                // Monthly user growth
                $monthlyUserGrowth = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                ->groupBy('month')
                ->orderBy('month')
                ->pluck('count', 'month')->toArray();
    
            // Ensure the monthly data has all months represented (1 to 12)
            $monthlyUserGrowth = array_replace(array_fill(1, 12, 0), $monthlyUserGrowth);
    
            // Total visited users per day
            $visitedUsersPerDay = Car::selectRaw('DATE(created_at) as date, COUNT(*) as total_visits')
                ->groupBy('date')
                ->orderBy('date', 'desc')
                ->pluck('total_visits', 'date')->toArray();

        return view('dashboard', compact('totalUsers', 'totalCars', 'availableCars', 'bookedCars', 'totalVisits', 'monthlyUserGrowth',
            'visitedUsersPerDay'));
    }

    public function notification()
    {
       $notifications = book::with('car', 'user')->where('status', 'booked')->get();

        return view('notification' , compact('notifications'));
       
    }
    public function view($id)
    {
        $notifications = book::with('car', 'user')->findOrFail($id);

        return view('view', compact('notification',compact('notificcations') ));
    }


}
