<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function authenticate(LoginRequest $request): \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if ($request->ajax()) {
                return response()->json([
                    'status' => true,
                ]);
            }

            return redirect()->intended('profile');
        }
        if ($request->ajax()) {
            return response()->json([
                'errors' => [
                    'password' => 'Введений неправильний пароль'
                ]
            ], 422);
        }


        return back(422)->withErrors([
            'password' => 'Введений неправильний пароль',
        ])->onlyInput('password');
    }
}
