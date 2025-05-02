<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\PasswordResetRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends BaseController
{
    public function create()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLink(PasswordResetRequest $request)
    {
        Password::broker()->sendResetLink(
            $request->validated()['email']
        );

        return back()->with('status', trans('passwords.sent'));
    }
}