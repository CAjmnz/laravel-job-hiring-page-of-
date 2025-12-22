<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
{
    $attributes = $request->validate([
        'first_name' => ['required', 'string', 'max:255'],
        'last_name'  => ['required', 'string', 'max:255'],
        'email'      => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password'   => ['required', 'confirmed', 'min:8'],
    ]);

    // Combine first_name and last_name into "name"
    $name = $request->first_name.' '.$request->last_name;

   $user = User::create([
    'First_name' => $request->first_name,
    'Last_name'  => $request->last_name,
    'email'      => $request->email,
    'password'   => bcrypt($request->password),
]);

    Auth::login($user);

    return redirect('/job-listings');
}
}