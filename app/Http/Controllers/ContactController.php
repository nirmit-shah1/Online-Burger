<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\contactback;
use Auth;
use Exception;
use Carbon;
class ContactController extends Controller
{
    public function contactback(Request $request)
    {
        $this->validate($request,[
            'name1' => 'required',
            'email1' => 'required|email',
            'subject' => 'required',
            'message'=> 'required',

        ],
        ['name1.required'=> 'Name is required',
        'email1.required' => 'Email ID is required.',
        ]);
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
        $user=new contactback;
       echo $user->name=$request->name1;
       echo $user->mail=$request->email1;
        echo $user->contact_id=$no;
        echo $user->message=$request->message;
       echo  $user->subject=$request->subject;
       if($user->save())
            {
            
                session()->flash('contactsuccess','Succesfully your Message has been set');
                return redirect()->route('contact'); 
            }

        }
        catch(Exception $e)
        {
            session()->flash('contacterror','Something Wrong Happen');
            return redirect()->back();
        }
}
}