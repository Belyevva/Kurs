<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class EmailVerificationPromptController extends Controller
{
    public function __invoke(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(AppServiceProvider::HOME)
                    : view('auth.verify-email');
    }
}