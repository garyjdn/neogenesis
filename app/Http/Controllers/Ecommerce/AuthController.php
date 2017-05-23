<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Oauth;
use Socialite;
use Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Redirect;

class AuthController extends Controller
{

    use AuthenticatesUsers;
    protected $redirectTo = '/';

    public function showLoginPage()
    {
        /**
         * seve the previous page in the session
         */
        $previous_url = Session::get('_previous.url');
        $ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $ref = rtrim($ref, '/');
        if ($previous_url != url('login'))
        {
            Session::put('referrer', $ref);
            if ($previous_url == $ref)
            {
                Session::put('url.intended', $ref);
            }
        }

        return view('ecommerce.login')->with('wrapper2', true);
    }

    public function showRegisterPage()
    {
        return view('ecommerce.register')->with('wrapper2', true);
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        try
        {
            $socialUser = Socialite::driver($provider)->user();
            //dd($socialUser);
        }
        catch(Exception $e)
        {
            $errormsg = ['sub' => 'Login Gagal', 'msg' => 'Data user tidak ditemukan'];
            return redirect('/')->with('errormsg', $errormsg);
        }

        $socialProvider = Oauth::where('oauth_uid', '=', $socialUser->getId())->first();
        if(!$socialProvider)
        {
            // create new user
            $user = User::firstOrCreate(
                ['email' => $socialUser->getEmail()],
                ['name' => $socialUser->getName()],
                ['image' => $socialUser->getAvatar()]
            );

            $user->oauth()->create(
                ['oauth_provider' => $provider],
                ['oauth_uid' => $socialUser->getId()]
            );
        }
        else
        {
            $user = $socialProvider->user;
        }

        auth()->login($user);
        return redirect('/');

    }

    public function login(Request $request)
    {
        $email = $request['email'];
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended(Session::pull('referrer'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('ecommerce.login');
    }

    public function register(Request $request)
    {

        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'retype-password' => 'required|min:8|same:password',
            'tanggal-lahir' => 'required|date',
            'hp' => 'required|numeric',
        ]);

        $user = new User();
        $user->name = $request->input('nama');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->birthdate = $request->input('tanggal-lahir');
        $user->gender = $request->input('gender');
        $user->phone = $request->input('hp');
        $user->image = 'unknown.png';
        $user->save();

        return redirect()->route('home');

    }


}
