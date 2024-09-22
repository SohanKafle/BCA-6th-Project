<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $cars=Car::all();
        return view ('welcome', compact('cars'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    public function car()
    {
        $cars = Car::orderBy('id')->paginate(6); // Fetch paginated results, 6 cars per page
        return view('car', compact('cars'));
    }
    

    public function search(Request $request)
    {
        // Get filter values from the request
        $name = $request->input('name');
        $min_price = $request->input('min_price');
        $max_price = $request->input('max_price');

        // Build the query
        $query = Car::query();

        // Apply filters
        if ($name) {
            $query->where('name', 'LIKE', "%{$name}%");
        }

        if ($min_price) {
            $query->where('price', '>=', $min_price);
        }

        if ($max_price) {
            $query->where('price', '<=', $max_price);
        }

        // Get the filtered properties
        $properties = $query->get();

        // Redirect to another page showing the results
        return view('search', compact('properties'));
    }
}
