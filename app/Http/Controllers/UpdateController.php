<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Update;
use Auth;
use Exception;
use Carbon;
class UpdateController extends Controller
{
    public function updateback(Request $request)
    {
        
        
        $file=$request->file('file');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;  
        echo $file->move(base_path('resources\views\pages\upload'),$filename);
        $menu_id=$request->input('id');
        $h_name=$request->input('name1');
        $cost=$request->input('price');
        $img_n=$request->input('imgname');
        $img_f=$filename;
        $cal=$request->input('calories');
        $desc=$request->input('description');

$update_data=array('hamburger_name'=>$h_name,'price'=>$cost,'image_name'=>$img_n,'image'=>$img_f,'calories'=>$cal,'description'=>$desc,);

$update = DB::table('menu') ->where('menu_id',$menu_id) ->limit(1)
->update($update_data);
        
       
                return redirect()->route('admin'); 
    

    
            session()->flash('Inserterror','Something Wrong Happen');
            return redirect()->back();
    
    }
    
}
