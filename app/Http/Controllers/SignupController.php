<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Signup;
use Auth;
use Exception;

class SignupController extends Controller
{
    public function signup(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'correo' => 'required|email',
            'pwd' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{6,})/'
        ],
        ['nombre.required'=> 'Nombre is required',
        'correo.required' => 'Email ID is required.',
        'pwd.min' => 'Insufficent Length',
        'pwd.required' => 'Password Required',
        'passssword.regex' => ' Password format invalid.']);
       $email=$request->correo;
       try{ 
        $user=new Signup;
        $user->mail=$request->correo;
        $user->address=$request->dir;
        $user->name_surname=$request->nombre;
        $user->password=$request->pwd;
        if($user->save())
        {
            session()->put('login_email',$email);
        session()->put('user','User');
                    /*$to_email = $email;
					$subject = 'welcome offer';
					$message = 'Welcome to ibras burger';
					$headers = 'From: noreply@ibras.com';
					mail($to_email,$subject,$message,$headers);*/
            return redirect()->route('login'); 
        }

        }
        catch(Exception $e)
        {
            session()->flash('inserterror','Already User Exists');
            return redirect()->back();
        }
        
        

    }

}
