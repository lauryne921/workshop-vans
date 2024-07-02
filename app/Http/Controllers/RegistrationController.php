<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationMail;

class RegistrationController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
        ]);

        Mail::to($user->email)->send(new RegistrationMail($user));

        return redirect()->back()->with('success', 'Inscription réussie ! Vérifiez vos mails pour la confirmation.');
    }
}
