<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\carts;
use Auth;
use Exception;
use Carbon;


class Cartcontroller extends Controller
{
    public function carts(Request $request)
    {
        $no=0;
        $no=DB::table('order')->max('order_id');
        if($no>=1)
    	{
	        $no=$no+1;
	    }				
	    else
	    {
		    $no=1;
        }
        $mail=$request->mail;
        $id=$request->id;
        $date1=date('y-m-d');
        $mytime = Carbon\Carbon::now();
         $mytime->toDateTimeString();
        $status="order_placed";
        try{ 
            $user=new carts;
            echo $user->menu_id=$id;
            echo $user->time=$mytime;
            echo $user->order_id=$no;
            echo $user->status=$status;
            echo $user->date=$date1;
            echo $user->mail=$mail;
            if($user->save())
            {
                session()->flash('orderplaced','order');
                return redirect()->route('login'); 
            }
    
            }
            catch(Exception $e)
            {
                return redirect()->back();
            }
          

    }
    
}
