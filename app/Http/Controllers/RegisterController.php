<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255', // format 1
            'username' => ['required', 'min:4', 'max:255', 'unique:users'], // format 2
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // enkripsi password
        // $validatedData['password'] = bcrypt($validatedData['password']); // cara 1
        $validatedData['password'] = Hash::make($validatedData['password']); // cara 2

        // import data yang sudah di validasi ke database
        User::create($validatedData);

        // flash data
        // $request->session()->flash('success', 'Registration Successfull!! Please login');

        // kembalikan ke login ketika sudah tersimpan
        return redirect('/login')->with('success', 'Registration Successfull!! Please login');
    }
}
