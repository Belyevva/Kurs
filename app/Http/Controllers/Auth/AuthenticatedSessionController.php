<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends BaseController
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            return back()->withInput()->withErrors(['email' => __('auth.failed')]);
        }

        request()->session()->regenerate();

        return redirect()->intended(\App\Providers\AppServiceProvider::HOME);    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}