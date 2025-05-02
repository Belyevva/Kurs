<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class VerifyEmailController extends BaseController

{
    public function __construct()
    {
        $this->middleware([EnsureEmailIsVerified::class]);
    }

    public function __invoke(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
                   ? redirect()->intended(RouteServiceProvider::HOME)
                   : view('auth.verify-email');
    }
}