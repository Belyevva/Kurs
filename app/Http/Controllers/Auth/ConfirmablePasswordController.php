<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Authentication\EnsurePasswordIsValidForUser;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ConfirmablePasswordController extends BaseController

{
    public function show()
    {
        return view('auth.confirm-password');
    }

    public function store(Request $request)
    {
        EnsurePasswordIsValidForUser::run($request->user(), $request->password);

        $request->session()->put('auth.password_confirmed_at', time());

        return back()->with('status', 'password-confirmed');
    }
}