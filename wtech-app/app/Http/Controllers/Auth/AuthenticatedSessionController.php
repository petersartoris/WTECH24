<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    /*public function store(LoginRequest $request): Response
    {
        $request->authenticate();

        $request->session()->regenerate();

        return response()->noContent();
    }*/

    /**
     * Destroy an authenticated session.
     */
    /*public function destroy(Request $request): Response
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->noContent();
    }*/

    public function create() {
        return view('auth.login');
    }

    public function store() {
        
        //validate
        $attributes = request()-> validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        // try to login user
        if (Auth::attempt($attributes)) {
            request()->session()->regenerate();
            return redirect('/');
        }

        // login failure
        else {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials do not match our records.'],
            ]);
        }
    }

    public function destroy() {
        Auth::logout();

        return redirect('/');
    }
}
