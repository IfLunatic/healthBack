<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'min:2', 'max:255'],
                'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'unique:users,email'],
                'password' => ['required', 'string', 'min:8', 'max:64', 'confirmed'],
            ],
            [
                'name.required' => "Вкажіть ім'я — так ми зможемо звертатися до вас у профілі.",
                'name.min'      => "Ім'я має містити мінімум :min символи.",
                'name.max'      => "Ім'я не може бути довшим за :max символів.",

                'email.required' => "Вкажіть email — він потрібен для входу та відновлення доступу.",
                'email.email'    => "Введіть коректний email, наприклад name@example.com.",
                'email.unique'   => "Цей email уже зареєстрований. Спробуйте увійти або відновити пароль.",

                'password.required'  => "Створіть пароль для захисту акаунта.",
                'password.min'       => "Пароль має бути не коротшим за :min символів.",
                'password.confirmed' => "Паролі не співпадають — перевірте поле підтвердження.",
            ]
        );
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('verification.notice');
    }

    public function login()
    {
    return view('user.login');
    }

    public function dashboard(){
        return view('user.dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
