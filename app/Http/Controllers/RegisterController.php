<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register', [
            'title' => 'Register | Whatsapp Bross'
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'username' => ['required', 'min:3', 'max:20', 'unique:users'],
            'password' => 'required|min:5',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        // $this->$request->session()->flash('success', "Registrasion success!!. Please Login");
        return redirect('/login')->with('success', 'Registrasion success!!. Please Login');
    }
}
