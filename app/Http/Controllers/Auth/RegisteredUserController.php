<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ], [
            'phone.unique' => 'Цей номер телефону вже зареєстрований. Увійдіть в свій кабінет, або зареєструйте інший.'
        ]);

        $validator->validated();

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'include_sleep_place' => is_string($request->include_sleep_place),
            'password' => Hash::make($request->password),
            'role_id' => is_integer($request->role_id)? $request->role_id: User::REGULAR_USER
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
