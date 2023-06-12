<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SuperAdminController extends Controller
{
    public function SuperDashboard()
    {
        return view('super.dashboard');
    }

    public function AdminList()
    {
        $admins = User::where('role', 'admin')->get();
        return view('super.admin', compact('admins'));
    }
    public function AdminCreate()
    {
        $admin = new User();
        return view('super.admin-create', compact('admin'));
    }

    public function AdminStore(Request $request)
    {
        $admin = new User();
        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->role = $request->role;
        $admin->password = bcrypt($request->password);
        $admin->save();
        return redirect()->route('super.admin')->with('success', 'Admin added successfully');
    }

    public function AdminEdit($id)
    {
        $admin = User::find($id);
        return view('super.admin-edit', compact('admin'));
    }

    public function AdminUpdate(Request $request, $id)
    {
        $admin = User::find($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();
        return redirect()->route('super.admin')->with('success', 'Admin updated successfully');
    }

    public function AdminDestroy($id)
    {
        $admin = User::find($id);
        $admin->delete();
        return redirect()->route('super.admin')->with('success', 'Admin deleted successfully');
    }
}
