<?php
namespace App\Models\User;
namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalCars = Car::count();
        $availableCars = Car::where('availabilty', 'available')->count(); // Assuming 'status' is a column
        $bookedCars = $totalCars - $availableCars;
        // $pendingRequests = Car::where('status', 'pending')->count(); // Example for pending requests
        $totalVisits = 30000;

        return view('dashboard', compact('totalUsers', 'totalCars', 'availableCars', 'bookedCars', 'totalVisits'));
    }
    
}