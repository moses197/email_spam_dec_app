<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function login(Request $request)
    {
        $login_auth = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if(auth()->attempt($login_auth)){
            $request->session()->regenerate();

            return redirect('index')->with('message',"You're Logged in now");
        }

        return back()->withErrors(['email' => 'Invalid Credential'])->onlyInput('email');
        // User::login($login_auth);
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

    public function list_users() {
        $user = Auth::user();
        $get_users = User::whereNotIn('id', [$user->id])->get();
        // dd($get_users);
        return view('app-user', [
            'get_users' => $get_users,
        ]);
    }
}
