<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin2;
use App\Models\Category;
use App\Models\Olahan;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\Storage;

class AdminController extends Controller
{
    public function index( Request $request){
        $admin= Admin2::all();
        
        $Olahan= Olahan::all();
        
        $title ="Dasboard";

        // $admins = new admin2;
        // if(isset($_GET['m'])){
        //     $m=$_GET['m'];
        //     $admins=$admins->where('Olahan_id',"%$m%");
        // }
        // if(isset($_GET['id'])&&$_GET['id']!=''){
        //     $admins=$admins->where('id' , $_GET['id']);
        // }

        // $admins=$admins->paginate(2);



        $katakunci = $request->katakunci;
        if(strlen($katakunci)){
            $admin = Admin2::where('Olahan_id','like',"%$katakunci%")
            ->orwhere('rate_id','like',"%$katakunci%")
            ->paginate(4);
            
        }
      
        return view('admin.admin',compact('title','admin','Olahan'));
    }

    public function create(){
        $admin= Admin2::all();
        $title ="input";
        $Olahan= Olahan::all();
        return view('admin.input',compact('title','Olahan'));
    }

    public function store(Request $request){
        $message=[
            'required'=>'Kolom :attribute harus Lengkap',
            'date'=>'Kolom :attribute harus tanggal',
            'numeric'=>'Kolom :attribute harus angka',
        ];
        $validasi=$request->validate([
        'Olahan_id'=>'required',
        'title'=>'required|unique:admin2s|max:255',
        'rate_id'=>'required',
        'desc'=>'required',
        'gambar'=>'required|mimes:jpg,bmp,png|max:512',
        ],$message);
        $path = $request->file('gambar')->store('gambar');
        // $validasi['Olahan_id']=Auth::id();
        $validasi['gambar']=$path;
        Admin2::create($validasi);
        return redirect('admin');

     }

     public function edit($id){
        $admin =Admin2::find($id);
        $Olahan=Olahan::all();
        $title ="Edit";
      
        return view('admin.input',compact('title','admin','Olahan'));
     }

     public function update(Request $request,$id){
        $message=[
            'required'=>'Kolom :attribute harus Lengkap',
            'date'=>'Kolom :attribute harus tanggal',
            'numeric'=>'Kolom :attribute harus angka',
        ];
        $validasi=$request->validate([
        'Olahan_id'=>'required',
        'title'=>'required:admin2s|max:255',
        'desc'=>'required',
        'rate_id'=>'required',
        

        ],$message);
        if($request->hasFile('gambar')){
            $fileName=time().$request->file('gambar')->getClientOriginalName();
        $path = $request->file('gambar')->storeAs('gambar',$fileName);
                $validasi['gambar']=$path;
                $admin=Admin2::find($id);
                Storage::delete($admin->gambar);
        }
        // $validasi['user_id']=Auth::id();
   
        Admin2::where('id',$id)->update($validasi);
        return redirect('admin');
     }

     public function destroy($id){
        $admin=Admin2::find($id);
        if($admin != null){
        Storage::delete($admin->gambar);
        $admin=Admin2::find($admin->$id);
        Admin2::where('id',$id)->delete();
        }
       return redirect('admin');
     }


}
