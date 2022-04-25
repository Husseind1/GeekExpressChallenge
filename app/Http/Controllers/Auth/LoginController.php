<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Illuminate\Support\Facades\Mail;
use App\Mail\LoginEmailSender;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth;

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
    // protected $redirectTo = '/home';
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function redirectTo()
{
    $user = auth()->user(); 
    $user_name = $user->name;
    $email = $user->email;
    Mail::to($email)->send(new LoginEmailSender($user_name));

    return '/';
}
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
