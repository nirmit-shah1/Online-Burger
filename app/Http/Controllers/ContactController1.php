<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\contactback1;
use Auth;
use Exception;
use Carbon;
use Illuminate\Http\Request;

class ContactController1 extends Controller
{
    public function contactback1(Request $request)
    {
    $no=0;
        $no=DB::table('contact')->max('contact_id');
      
        if($no>=1)
    	{
	        $no=$no+1;
	    }				
	    else
	    {
		    $no=1;
        }
        echo $no;
    try    
       { 
        $user=new contactback1;
       echo $user->name=$request->name1;
       echo $user->mail=$request->email1;
        echo $user->contact_id=$no;
        echo $user->message=$request->message;
       echo  $user->subject=$request->subject;
       if($user->save())
            {
            
                session()->flash('contactsuccess','Succesfully your Message has been set');
                return redirect()->route('contact1'); 
            }

        }
        catch(Exception $e)
        {
            session()->flash('contacterror','Something Wrong Happen');
            return redirect()->back();
        }
}
}

