<?php

namespace App\Http\Controllers\Auth;

use App\Domain\Entities\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    protected $model;

    protected $auth;

    protected $redirectTo = '/dashboard';

    public function __construct(Guard $auth, User $user)
    {
        $this->auth = $auth;
        $this->model = $user;

        $this->middleware('guest', ['only' => ['getlogin', 'postLogin']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function postLogin(Request $request)
    {
        if ($this->auth->attempt($request->only('email', 'password'), true)) {

            // save to session
//            session()->put('user_id', Auth::user()->id);
//            session()->put('email', Auth::user()->email);
//            session()->put('uptd_id', Auth::user()->uptd_id);
//            session()->put('skpd_id', Auth::user()->skpd_id);
//            session()->put('uptd', Auth::user()->uptd->uptd);
//            session()->put('skpd', Auth::user()->skpd->skpd);
            session()->put('name', Auth::user()->name);
//            session()->put('level', Auth::user()->level);

            // save to log file
//            \Log::info('User login ' . session('name') . ' | user_id ' . session('user_id'), [Auth::user()]);

            // cek apakah levelnya kurang dari atau sama dengan 100
//            if (Auth::user()->level >= 100 AND Auth::user()->level <= 900 AND Auth::user()->level != 911) {
//
//                // redirect ke backoffice
//                return redirect()->route('backoffice');
//            }
//            if (Auth::user()->level >= 1 AND Auth::user()->level <= 9) {
//                // redirect ke frontoffice
//                return redirect()->route('frontoffice');
//            }
//            if (Auth::user()->level == 911) {
//                // redirect ke Logs View
//                return redirect()->route('logs');
//            } else {
//                return redirect()->route('login');
//            }

            return redirect()->route('dashboard');

        }

        session()->flash('auth_message', 'Kombinasi email dan password salah!');

        // redirect to login and set the flash message
        return redirect()->route('login');
    }
}
