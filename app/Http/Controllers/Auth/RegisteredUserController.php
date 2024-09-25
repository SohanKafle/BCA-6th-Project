<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phonenumber' => ['required', 'integer'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'photopath' => ['nullable', 'image'],
            'terms' => ['accepted'],
        ]);

        $photoname = time() . '.' . $request->photopath->extension();
        $request->photopath->move(public_path('uploads/users'), $photoname);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'password' => Hash::make($request->password),
            'photopath' => $photoname,
        ]);

        event(new Registered($user));
        

        // Redirect to the login page after successful registration
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}
