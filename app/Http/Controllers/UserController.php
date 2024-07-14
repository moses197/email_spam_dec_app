<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function login()
    {
        
    }
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:4',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        // Optionally, you can log in the user immediately after registration
        auth()->login($user);

        return redirect()->route('index')->with('success', 'Registration successful!');
    }
}
