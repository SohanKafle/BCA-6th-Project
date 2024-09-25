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
    public function edit()
    {
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $data = $request->validate([
            'name' => 'required|string|max:255',  // Name is required
            'email' => 'required|email|unique:users,email,' . $id,  // Email should be unique except for the current user
            'photopath' => 'nullable|image|',  // Photo is optional, max size 2MB
            'phonenumber' => 'nullable|string|max:15',  // Optional phone number
        ]);

        // Find the user by ID, if not found, return an error
        $user = User::find($id);
        

        // Check if a new image has been uploaded
        if ($request->hasFile('photopath')) {
            // Create a unique filename for the new image
            $photoname = time() . '.' . $request->photopath->extension();

            // Move the new image to the public images directory
            $request->photopath->move(public_path('uploads/users'), $photoname);

            // Delete the old image file, but only if it exists
            if ($user->photopath && file_exists(public_path('uploads/users/' . $user->photopath))) {
                unlink(public_path('uploads/users/' . $user->photopath));
            }

            // Update the photopath to the new image
            $data['photopath'] = $photoname;
        } else {
            // If no new image is uploaded, keep the existing one
            $data['photopath'] = $user->photopath;
        }

        // Update the user with the new data
        $user->update($data);

        // Redirect to user admin index with a success message
        return redirect()->route('users.profile',$user->id)->with('success', 'User updated successfully.');
    }

        public function sendMail(Request $request)
        {
            // Validate the request
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'message' => 'required|string',
            ]);
    
            // Prepare the email body
            $body = "Name: {$request->name}\n"
                  . "City: {$request->city}\n"
                  . "Phone: {$request->phone}\n"
                  . "Email: {$request->email}\n"
                  . "Message: {$request->message}";
    
            // Send email
            Mail::raw($body, function ($message) use ($request) {
                $message->to('kaflesohan1@gmail.com') 
                        ->subject('Contact Form Submission')
                        ->from($request->email, $request->name);
            });
    
            // Redirect back with success message
            return back()->with('success', 'Your message has been sent successfully!');
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

    public function selectPaymentMethod()
{
    $paymentMethods = [
        ['id' => 1, 'name' => 'eSewa', 'icon' => 'fab fa-cc-esewa'], // Example for eSewa
        ['id' => 2, 'name' => 'PayPal', 'icon' => 'fab fa-cc-paypal'],
        ['id' => 3, 'name' => 'Bank Transfer', 'icon' => 'fas fa-university'],
        ['id' => 4, 'name' => 'Credit Card', 'icon' => 'fas fa-credit-card'],
    ];
    
    $user = Auth::user();
    $cars = Car::get();

    return view('users.selectpayment', compact('paymentMethods', 'user', 'cars'));
}
    
}
