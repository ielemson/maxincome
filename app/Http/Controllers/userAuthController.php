<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\activities;
use App\user_verification;
use Session;
use User;
class userAuthController extends Controller
{
    
   

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            // return '/'.Auth::user()->username.'/dashboard';

            // $user = Auth::user()->id;
            // LOG USER LOGIN ACTIVITIES
            $act = new activities;
            $act->action = "User logged in to account";
            $act->user_id = Auth::user()->id;
            $act->save();

            if(Auth::user()->status == 0 || Auth::user()->status == 'New' || Auth::user()->status == 'pending')  

                {
                 Session::flush();
                  return  redirect('login')->with('error','Account not activated');
                               
                }

                if(Auth::user()->status == 2 || Auth::user()->status == 'Blocked')

                {
                    Session::flush();     
                    return  redirect('login')->with('error','Account Blocked! Please contact support.');        
                }
                
                try
                {
        
                    $maildata = ['email' => Auth::user()->email, 'username' => Auth::user()->username];
                    Mail::send('mail.loginNotification', ['md' => $maildata], function($msg) use ($maildata){
                        $msg->from(env('MAIL_USERNAME'), $this->st->site_title);
                        $msg->to($maildata['email']);
                        $msg->subject('User Account login');
                    });
                }
                catch(\Exception $e)
                {
                    
                }
        
                // $user = Auth::User();
                if(Auth::user()->sec_2fa_status == 1)
                {
                    Session::flush();
                    return redirect()->route('user.login2fa');
                }
                //   $user_verification = user_verification::where('user_id',Auth::user()->id)->first();
               
                 return redirect()->intended('/'.Auth::user()->username.'/dashboard');

                //  return view('user.authenticate'.compact('user_verification'));
        }

            return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }



    public function logout() {
      Auth::logout();

      return redirect('login');
    }
}
