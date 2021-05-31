<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Password_Recovery;
use Illuminate\Support\Str;
use DB;
use Hash;
use Session;
use Carbon\Carbon;
use App\User;

class ForgotPasswordController extends Controller
{
    

  

 public function reset_password(Request $request)
  {
    $request->validate([
        'email' => 'required|email',
    ]);


    // dd($request);

    $usr = User::whereEmail($request->email)->first();

    if($usr != null){

      $token = (time().Str::random(64));
          
          $usr->pswd_recovery_token = $token;
          $usr->save();

      // DB::table('password_resets')->insert(

      //     ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
      // );

      $data = [
        'email'=>$request->email,
        'token'=>$token,
        'username'=>$usr->username,
      ];
    
       Mail::to($request->email)->send(new Password_Recovery($data));

    return back()->with('success', 'We have e-mailed your password reset link!');
    }else{

      return back()->with('error', 'Email does not exist, please register a new account!');
    }
    

    
  }


  public function get_token_password($usn, $token)
  {        
      // $usr = User::where('username', $usn)->first();
      $usr = User::where([
        ['username',$usn],
        ['pswd_recovery_token',$token]
      ])->first();

      if($usr != null)
      {
          // Session::put('reset_pwd_usn', $usr->id);
          // Session::put('reset_pwd_token', $token);

          return view('auth.passwords.reset',compact('token'));
      }
      else
      {
        // Session::forget();
          // Session::flash('error', 'Password reset username or token is invalid. Link may have expired.');
          return view('auth.passwords.error_password_reset')->with('error','Password reset username or token is invalid. Link may have expired.');
      }

  }


  public function reset_user_pass(Request $request,$token)
  {   
      
   $request->validate([
     'password'=>'required|min:6|confirmed'
   ]);
      
      try
      {
          
          $usr = User::where('pswd_recovery_token',$token)->first();
        // dd($usr);
          if($usr != null)
          {
            $usr->pwd = Hash::make($request->password);
            $usr->pswd_recovery_token = '';
            $usr->save();
            
            return redirect()->route('login')->with('succes','Password reset Successful. You can now login.');  
          }
          else
          {
            Session::flash('error', 'User with this email not found or token expired!');
            return back();
          }
      }
      catch(\Exception $e)
      {
          Session::flash('error', 'Error Updating your password!');    
          return back();
      }

  }
}
