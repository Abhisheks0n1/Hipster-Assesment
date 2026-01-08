<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\UserPresenceEvent;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('customer.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('customer')->attempt($request->only('email', 'password'))) {
            $user = Auth::guard('customer')->user();
            $user->update(['is_online' => true]);
            event(new UserPresenceEvent($user->id, 'customer', true));
            return redirect('/customer/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        $user = Auth::guard('customer')->user();
        $user->update(['is_online' => false]);
        event(new UserPresenceEvent($user->id, 'customer', false));
        Auth::guard('customer')->logout();
        return redirect('/customer/login');
    }
}