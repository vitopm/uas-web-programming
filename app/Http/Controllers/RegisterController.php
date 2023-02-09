<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Register',[

        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'FirstName' => 'required|max:25',
            'LastName' => 'required|max:25',
            'Role' => 'required',
            'email' => 'required|email',
            'password'=> 'required|min:5|max:255',
            'confirm-password' => 'required_with:password|same:password|min:5|',
            'gender' => 'required',
        ]);

        //$validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        $validatedData['Photo'] = $request->file('Photo')->store('images');

        User::create($validatedData);

        return redirect('/Login');
    }

}
