<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        if(auth()->user()) {
            return redirect()->route('admin.index');
        }
        return view('admin.auth.login');
    }

    public function post_login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email', // make sure the email is an actual email
            'password' => 'required|min:6'
        ]);

        $data = array(
            'email' => $request->email,
            'password' => $request->password
        );

        if (Auth::attempt($data, $request->has('remember'))) {
            return redirect()->route('admin.index');
        }

        $request->session()->flash('error', "This credentials do not match our records.");
        return redirect()->route('admin.login');
    }

    public function logout()
    {
        Auth::logout(); // logging out user
        return redirect()->route('admin.login'); // redirection to login screen
    }
}
