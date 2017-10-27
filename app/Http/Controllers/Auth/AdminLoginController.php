<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm() {
        return view('auth.adminlogin');
    }

    public function login(Request $request) {

        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)){
            return redirect()->intended(route('adminhome'));
        }

        return redirect()->back()->withInput($request->only('username', 'remember'));
    }

    public function index() {
        return view('admin.home');
    }
}
