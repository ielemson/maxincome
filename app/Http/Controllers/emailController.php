<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class emailController extends Controller
{
    

    public function email_verification($receiptno,$userid)
    {

       // GET ALL COMPLETED ORDERS WHERE THE RECEIPTS NO MATCH

       $data = Order::where([
       ['status', '=', true],
       ['receipt_no', '=', $receiptno]
       ])->get();

       $user = User::where('id',$userid)->first();

       Mail::to($user->email)->send(new SendEmailReceipt($data,$receiptno));

       return redirect()->back()->with('success','Receipt has been sent');
    }
}
