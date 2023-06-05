<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.dashboard');
    }
    public function UserList()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.user', compact('users'));
    }

    public function UserEdit($id)
    {
        $user = User::find($id);
        return view('admin.user-edit', compact('user'));
    }

    public function UserUpdate(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('admin.user')->with('success', 'User updated successfully');
    }

    public function UserDestroy($id)
    {
        $User = User::find($id);
        $User->delete();
        return redirect()->route('admin.user')->with('success', 'User deleted successfully');
    }
}
