<?php

namespace App\Http\Controllers;

use App\Enums\UserType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    
    public function register(Request $request)
    {
        return view('pages.auth.register');
    }
    public function postRegister(Request $request)
    {
        $data = $request->validate([
            'name' => 'required', 'email' => 'required|unique:users', 'password' => 'required'
        ]);
        $data['perm'] = 'PERM_2';
        $user = User::create($data);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return redirect()->route('login');
    }
    public function login(Request $request)
    {
        return view('pages.auth.login');
    }
    public function postLogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required', 'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        $request->session()->flash('alert-danger', 'Error logging in');
        return redirect()->route('login');
    }

    public function dashboard(Request $request)
    {
        if(auth()->user()->perm == UserType::Student){
            return redirect()->route('student.dashboard');
        }
        if(auth()->user()->perm == UserType::Administrator){
            return redirect()->route('admin.dashboard');
        }

        die('unidentified route!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
