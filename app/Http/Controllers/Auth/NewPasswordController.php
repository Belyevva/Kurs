<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\UpdatePasswordRequest;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Middleware\RequirePasswordConfirmation;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class NewPasswordController extends BaseController
{
    public function create(Request $request)
    {
        return view('auth.reset-password', [
            'token' => $request->route('token'),
            'email' => $request->input('email')
        ]);
    }

    public function store(UpdatePasswordRequest $request)
    {
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withInput($request->only('email'))->withErrors(['email' => __($status)]);
    }
}