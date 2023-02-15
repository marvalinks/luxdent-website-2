<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersModuleController extends Controller
{
    
    public function index(Request $request)
    {
        $users = User::latest()->paginate(100);
        return view('pages.admin.users.index', compact('users'));
    }
    public function addUsers(Request $request)
    {
        return view('pages.admin.users.add');
    }
    public function postUsers(Request $request)
    {
        
        $data = $request->validate([
            'name' => 'required', 'email' => 'required|unique:users', 'password' => 'required', 
            'perm' => 'required', 'telephone' => ''
        ]);
        $user = User::create($data);
        $request->session()->flash('alert-success', 'User successfully added');
        return redirect()->route('admin.users.index');
    }
    public function editUsers(Request $request, $id)
    {
        $user = User::where('userid', $id)->first();
        return view('pages.admin.users.edit', compact('user'));
    }
    public function updateUsers(Request $request, $id)
    {
        $user = User::where('userid', $id)->first();
        $data = $request->validate([
            'name' => 'required', 'email' => 'required',
            'perm' => 'required', 'telephone' => ''
        ]);
        if($request->password) {
            $data['password'] = Hash::make($request->password);
        }
        $user->update($data);
        $request->session()->flash('alert-success', 'User successfully updated');
        return redirect()->route('admin.users.index');
    }

}
