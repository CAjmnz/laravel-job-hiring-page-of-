<?php

namespace App\Http\Controllers;

use Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
   public function create()
   {
    return view('auth.login');
   }

    public function store()
   {
    $attributes= request()->validate([
         'email' => ['required', 'email'],
         'password' => ['required'],
    ]);
      if (Auth::attempt($attributes)) {
         request()->session()->regenerate();
         return redirect('/job-listings');
      }

      throw ValidationException::withMessages([
          'email' => 'Your provided credentials could not be verified.',
      ]);
   }
  


   public function destroy()
   {
    Auth::logout();

    return redirect('/login');
   }
}
