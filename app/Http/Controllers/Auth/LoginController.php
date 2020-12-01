<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::with('microsoft')->redirect();
    }

    public function handleProviderCallback()
    {
//        $user = Socialite::with('azure')->stateless()->user();
        $user = Socialite::with('microsoft')->user();
        $finduser = User::where('google_id', $user->id)->first();

        if($finduser){

            Auth::login($finduser);

            return  redirect('/home');

        }else{
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id'=> $user->id,
                'password'=> md5(rand(1,10000))

            ]);
//            dd($newUser);

            Auth::login($newUser);

            return redirect()->back();
        }

    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {

        $user = Socialite::driver('google')->stateless()->user();
//        $user = Socialite::driver('google')->user();
        $finduser = User::where('google_id', $user->id)->first();

        if($finduser){

            Auth::login($finduser);

            return  redirect('/home');

        }else{
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id'=> $user->id,
                'password'=> md5(rand(1,10000))

            ]);
//            dd($newUser);

            Auth::login($newUser);

            return redirect()->back();
        }

//        return $finduser;
        try {

//            $user = Socialite::driver('google')->user();
            $user = Socialite::driver('google')->stateless()->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return  redirect('/home');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id
                ]);

                Auth::login($newUser);

                return redirect()->back();
            }

        } catch (Exception $e) {
//            return redirect('auth/google');
            return 'error';
        }
    }
}
