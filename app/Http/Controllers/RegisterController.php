<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function Register(Request $request)
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'dni' => $request->dni,
            'primer_nombre' => $request->primer_nombre,
            'segundo_nombre' => $request->segundo_nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'use_instructions_is_read' => $request->use_instructions_is_read,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/register');
    }
}
