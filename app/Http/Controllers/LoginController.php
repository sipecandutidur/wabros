<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\ComparisonMethodDoesNotDeclareBoolReturnTypeException;

class LoginController extends Controller
{
    public function index(){
        return view('login', [
            'title' => 'Login | Whatsapp Bross'
        ]);
    }

    public function authentiate(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed.!');
    }

    public function logout(){

        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }


}
