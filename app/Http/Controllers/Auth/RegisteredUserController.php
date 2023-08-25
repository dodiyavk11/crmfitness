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
use App\Notifications\NewUserRegisterNotification;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('admin.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        // $request->validate([
        //     'name' => ['required', 'string'],
        //     'email' => ['required', 'string', 'email', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        //     'sname' => ['required', 'string'],
        //     'city' => ['required', 'string'],
        //     'student' => ['required', 'string' ],
        //     'gender' => ['required', 'string'],
        //     'telephone' => ['required', 'string'],
        //     'fitness' => [ 'string'],
        //     'card_number' => ['required', 'string'],
        //     'card_code' => ['required', 'string'],
        //     'note_internal' => [ 'string'],
        //     'note_visible' => [ 'string'],
        //     'active' => ['required', 'string'],
        //     'wallet_account_status' => [ 'integer'],
        //     'date' => [ 'string'],
        //     'date_admission_tickets' => [ 'date'],
        //     'date_solarium' => [ 'date'],
        // ]);
        // dd("hi");
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'surname'=>$request->sname,
            'city'=>$request->city,
            'student'=>$request->student,
            'gender'=>$request->gender,
            'telephone'=>$request->telephone,


            'dob'=>$request->dob,

        ]);

        event(new Registered($user));
        $notification = User::first();
        $notification->notify(new NewUserRegisterNotification($user));
        Auth::login($user);
        // dd('hi');
        return redirect(RouteServiceProvider::LOGIN);
    }
}



