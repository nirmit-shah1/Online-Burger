<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Delete;
use Auth;
use Exception;
use Carbon;
use Illuminate\Http\Request;


class DeleteController extends Controller
{
    public function delete(Request $request)
    {
        $id=$request->id;
        echo $id;
        try    
        { 
         DB::table('menu')->where('menu_id',$id)->delete();
         return redirect()->back();
         }
         catch(Exception $e)
         {
           return redirect()->back();
         }
    }
   
}
