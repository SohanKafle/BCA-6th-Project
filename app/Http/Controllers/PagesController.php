<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function home()
    {
        $cars = Car::take(6)->get(); // Fetch only 6 cars
    return view('welcome', compact('cars'));
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
        // Validate the request inputs
        $validated = $request->validate([
            'brand' => 'nullable|string|max:255',
            'min_price' => 'required|numeric|min:1', // Required, must be numeric and positive
            'max_price' => 'required|numeric|min:1', // Required, must be numeric and positive
        ], [
            // Custom error messages
            'min_price.required' => 'Minimum price is required.',
            'min_price.min' => 'Minimum price must be greater than 0.',
            'max_price.required' => 'Maximum price is required.',
            'max_price.min' => 'Maximum price must be greater than 0.',
        ]);
    
        // Get the filtered cars
        $query = Car::query();
    
        if ($validated['brand']) {
            $query->where('name', 'LIKE', "%" . $validated['brand'] . "%");
        }
    
        if ($validated['min_price']) {
            $query->where('price', '>=', $validated['min_price']);
        }
    
        if ($validated['max_price']) {
            $query->where('price', '<=', $validated['max_price']);
        }
    
        $cars = $query->paginate(9); // Paginate the results
        $properties = $query->get();
        // Return the view with cars
        return view('search', compact('cars', 'properties'));
    }
    
    
}
