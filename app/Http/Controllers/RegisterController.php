<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
     public function index()
    {
            return view('auth.register');
    }


    public function store(Request $request)
    {


        $request->request->add(['username' => Str::slug($request->username) ]);


       $this->validate($request, [
    'name' => 'required|min:5',
    'username' => 'required|unique:users|min:3|max:30',
    'email' => 'required|unique:users|email|max:60',
    'password' => [
        'required',
        'confirmed',
        'min:6',
        'regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/',
    ],
], [
    'password.regex' => 'A senha deve ter pelo menos 6 caracteres e conter letras e números.',
]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);



        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('posts.index');

    }

}
