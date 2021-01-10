<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Insert;
use Auth;
use Exception;
use Carbon;
class InsertController extends Controller
{
    public function insertnewback(Request $request)
    {
        $no=DB::table('menu')->MAX('menu_id');
        echo $no; 
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
        $file=$request->file('file');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;  
        echo $file->move(base_path('resources\views\pages\upload'),$filename);
        $user=new Insert;
        $user->menu_id=$no;
        $user->hamburger_name=$request->name1;
        $user->price=$request->price;
        $user->image_name=$request->imgname;
        $user->image=$filename;
        $user->calories=$request->calories;
        $user->description=$request->description;
       
     //(public_path("pages.upload"),$request->imgname);
       
       if($user->save())
            {
                echo "asda";
                session()->flash('insertsuccess2','Succesfully your Message has been set');
                return redirect()->route('admin'); 
            }

        }
        catch(Exception $e)
        {
            session()->flash('Inserterror','Something Wrong Happen');
            return redirect()->back();
        }
    }
    
}
