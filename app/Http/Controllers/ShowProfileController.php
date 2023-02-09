<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class ShowProfileController extends Controller
{
    public function showProfile()
    {
        return view('Profile',[
            "Prof" => User::all()
        ]);
    }

    public function updateProfile(Request $request)
    {
        $validator = User::make($request->all(),[
            'FirstName' => 'required|max:25',
            'LastName' => 'required|max:25',
            'Role' => 'required',
            'email' => 'required|email',
            'password'=> 'required|min:5|max:255',
            'confirm-password' => 'required_with:password|same:password|min:5|',
            'gender' => 'required',
        ]);

        $Validatedpassword= Hash::make($validator['password']);

        $users = User::where('id', '=', Auth::user()->id)->first();

        Storage::delete($users->Photo);

        DB::table('Users')->where('id', '=', Auth::user()->id)->update([
            'FirstName' => $request->get('FirstName'),
            'LastName' => $request->get('LastName'),
            'Role' => $request->get('Role'),
            'email' => $request->get('email'),
            'password' => $Validatedpassword,
            'gender' => $request->gender,
            'Photo' => $request->file('Photo')->store('images')
        ]);

        return redirect('/Saved');
    }

}
