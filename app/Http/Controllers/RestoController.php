<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RestoController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function list()
    {
        $data = Restaurant::all(); // Retrieve all restaurants from the database
        return view('list', ['data' => $data]); // Send data to the Blade template
    }

    public function add(Request $req)
    {
        //Data validation
        $validatedData = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500',
        ]);

        $restaurant = new Restaurant;
        $restaurant->name = $req->input('name');
        $restaurant->email = $req->input('email');
        $restaurant->address = $req->input('address');
        $restaurant->save();

        $req->session()->flash('status', 'Restaurant added successfully!');
        return redirect('/list');
    }

    public function edit($id)
    {
        $data = Restaurant::find($id);
        if (!$data) {
            return redirect('/list')->with('status', 'Restaurant not found!');
        }
        return view('edit', ['data' => $data]);
    }

    public function update(Request $req, $id)
    {
        $validatedData = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500',
        ]);

        $restaurant = Restaurant::find($id);
        if (!$restaurant) {
            return redirect('/list')->with('status', 'Restaurant not found!');
        }

        $restaurant->name = $req->input('name');
        $restaurant->email = $req->input('email');
        $restaurant->address = $req->input('address');
        $restaurant->save();

        $req->session()->flash('status', 'Restaurant updated successfully!');
        return redirect('/list');
    }

    public function register(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
            'contact' => 'required|string|max:20',
        ]);

        $user = new User;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->input('password')); // hash password
        $user->contact = $req->input('contact');
        $user->save();

        return redirect()->route('login.form')->with('status', ' Registration successful, you can log in!');
    }

    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $req)
    {
        // Find User With Mail Address
        $user = User::where('email', $req->input('email'))->first();

        // If user not found
        if (!$user) {
            return back()->with('error', 'User not found!');
        }

        // Check the password hashed with bcrypt.
        if (Hash::check($req->input('password'), $user->password)) {
            // If the password is correct, start the session.
            $req->session()->put('user', $user->name);
            return redirect('/');
        } else {
            return back()->with('error', 'Wrong password!');
        }
    }
    public function logout(Request $req)
    {
        // Logged out
        $req->session()->forget('user');
        return redirect('/')->with('message', 'Logged out successfully!');
    }
}
