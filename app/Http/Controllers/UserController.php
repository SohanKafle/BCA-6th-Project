<?php

namespace App\Models\User;

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user('id');
        $cars = Car::take(6)->get();
        return view('users.index', compact('user', 'cars'));
    }

    public function about()
    {
        $user = Auth::user('id');
        return view('users.about', compact('user'));
    }



    public function car()
    {
        $user = Auth::user('id');
        $cars = Car::paginate(6); 
        return view('users.car', compact('user', 'cars'));
    }

    public function contact()
    {
        $user = Auth::user('id');
        return view('users.contact', compact('user'));
    }

    public function services()
    {
        $user = Auth::user('id');
        return view('users.services', compact('user'));
    }


    public function profile($id)
    {
        $user = Auth::user('id');
        return view('users.profile', compact('user'));
    }
    public function book($id)
    {
        $cars = Car::find($id);
        $user = Auth::user('id');

        $relatedCars = Car::where('name', $cars->name)
            ->where('id', '!=', $id)
            ->get();
        $duration = $cars->duration;


        return view('users.book', compact('cars', 'user', 'relatedCars'));
    }
    public function edit($id)
    {
        $user = Auth::user('id');
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $user = User::find($id);
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'photopath' => 'image',
            'dob' => 'required',
            'phonenumber' => 'required',
        ]);
        $data['photopath'] = $user->photopath;
        if ($request->hasFile('photopath')) {
            $photoname = time() . '.' . $request->photopath->extension();
            $request->photopath->move(public_path('images/users'), $photoname);
            unlink(public_path('images/users/' . $user->photopath));
            $data['photopath'] = $photoname;
        }


        $user->update($data);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }


    public function sendContactForm(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'city' => 'required|string|max:255', // Change 'city' validation to a standard string validation
            'message' => 'required|string',
        ]);

        // Prepare email data
        $emailData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'city' => $request->input('city'), // You can include city in your email as well
            'message' => $request->input('message'),
        ];



        // Send the email using the Mailable class
        Mail::to('kaflesohan1@gmail.com')->send(new ContactFormMail($emailData));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function search(Request $request)
    {
        // Validate request inputs
        $validated = $request->validate([
            'brand' => 'nullable|string|max:255',
            'min_price' => 'nullable|numeric|min:0',
            'max_price' => 'nullable|numeric|min:0'
        ]);
    
        // Get authenticated user
        $user = Auth::user('id'); // Fetching user ID directly
    
        // Build the query
        $query = Car::query();
    
        // Apply filters
        if ($validated['brand']) {
            $query->where('name', 'LIKE', "%" . $validated['brand'] . "%");
        }
    
        if ($validated['min_price']) {
            $query->where('price', '>=', $validated['min_price']);
        }
    
        if ($validated['max_price']) {
            $query->where('price', '<=', $validated['max_price']);
        }
    
        // Execute the query and get filtered results
        $properties = $query->get();
    
        // Return view with the filtered data
        return view('users.search', compact('properties', 'user'));
    }
    
}
