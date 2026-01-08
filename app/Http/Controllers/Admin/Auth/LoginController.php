<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\UserPresenceEvent;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            $user = Auth::guard('admin')->user();
            $user->update(['is_online' => true]);
            event(new UserPresenceEvent($user->id, 'admin', true));
            return redirect('/admin/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        $user = Auth::guard('admin')->user();
        $user->update(['is_online' => false]);
        event(new UserPresenceEvent($user->id, 'admin', false));
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}