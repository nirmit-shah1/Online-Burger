<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Login;
use Auth;
session_start();
class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request,[
            'pass' => 'required',
            'email' => 'required|email',
        ],
        ['email.required'=> 'Username is required',
        'pass.required' => 'Password is required.',
       ]);
         
        $login_details=$request->all();
        $logins=implode(" ",$login_details);
        $login_details=$logins;
         $login= explode(' ', $login_details); 
         $email=$login[1];
         $password=$login[2];
         $user = DB::table('user')->where('mail', $email)->where('password',$password)->get();
         
         if($user->isEmpty())
         {
             session()->flash('invalid','Invalid Email or Password');
             return redirect()->back();
         }
         else
         {
             $user_details= explode(',', $user);
             $data=$user_details[0];
             $email_confirm=(string)$data;
             $main_email=ltrim($email_confirm,'[{"mail"');
             $data=(string)$main_email;
             $final=preg_replace('":"',"",$data);
             $final1=str_replace('"', '', $final);
             if($final1== "admin@gmail.com")
             {
                    session()->put('login_email',$final1);
                    session()->put('admin','Admin');
                    return redirect()->route('admin'); 
             }
             else
              {
                 session()->put('login_email',$final1);
                    session()->put('user','User');
                    return redirect()->route('login');
              }    
         }
    }
}
