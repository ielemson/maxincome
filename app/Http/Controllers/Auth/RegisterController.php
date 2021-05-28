<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email_Verification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

use App\activities;
use App\user_verification;
use App\kyc;
use Session;

use App\site_settings;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';
    
    private $token;
    private $email;
    private $user_name;
    private $st;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->st = site_settings::find(1);
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Fname' => ['required', 'string', 'max:255'],
            'Lname' => ['required', 'string', 'max:255'],
            // 'ref' => ['string', 'alpha_dash'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'unique:users', 'alpha_dash'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {        
        $this->token = mt_rand(0000, 9999).strtotime(date("Y-m-d H:i:s"));
        //Session::forget('ref');
        // $this->email = $data['email'];
        // $this->user_name = $data['username'];
        
       $user =  User::create([
            'firstname' => trim($data['Fname']),
            'lastname' => trim($data['Lname']),
            // 'phone' => trim($data['phone']),
            'email' => trim($data['email']),
            'username' => trim($data['username']),
            'pwd' => Hash::make($data['password']),
            'act_code' => $this->token,
            'status' => 0,
            'referal' => trim($data['ref']),
            'reg_date' => date('d-m-Y'),
            'currency' => $this->st->currency,
        ]);
       
        $this->user_name = $user->username;
        $this->email = $user->email;

        $user_verification = new kyc();

        $user_verification->user_id = $user->id;
        $user_verification->username = $user->username;
        $user_verification->save();

        return $user;
        
    }

    public function redirectTo()
    {
        
        try
        {
            // Session::flush();
            // Session::put('success', 'Registration Successful. Please check your email address inbox or spam folder to confirm and activate your account.'); 
            
            // $maildata = ['email' => $this->email, 'user_name' => $this->user_name, 'token' => $this->token];
            // Mail::send('mail.regconfirm', ['md' => $maildata], function($msg) use ($maildata){
            //     $msg->from(env('MAIL_USERNAME'), $this->st->site_title);
            //     $msg->to($maildata['email']);
            //     $msg->subject('User Account Activation');
            // }); 

             $data = [
            'username'=>$this->user_name,
            'email'=>$this->email,
            'token' => $this->token
             ];
            Mail::to($data['email'])->send(new Email_Verification($data));

            Session::flush();
            Session::flash('success', 'Registration Successful. Please check your email address inbox or spam folder to confirm and activate your account.'); 

            return '/login';
            // return route('login')->withSuccess('Registration Successful. Please check your email address inbox or spam folder to confirm and activate your account.!');

        }
        catch(\Exception $e)
        {
            Session::flush();
            Session::flash('error', $e->getMessage().'Registration successful! We are having problem sending mail. Please contact support for activation'); 
            // return route('login')->withError("$e->getMessage().Registration successful! We are having problem sending mail. Please contact support for activation!");
            return '/login';
        }
        
    }
}
