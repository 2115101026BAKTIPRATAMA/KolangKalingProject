<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\rate;
use App\Models\Admin2;

class DetailPemesanan extends Controller
{
    function detailpemesanan(){
        $title='Landing Page';
        $packages=Packages::all();
        $rates=rate::all();
        $admin=Admin2::all();

        return view('detailpemesanan', compact('title','packages','rates','admin'));
    }

    function order(){
        $admin=Admin2::all();
        return view('admin.booking', compact('admin'));
    }

    function detailorder(){
        $admin=Admin2::all();
        return view('admin.detailbooking', compact('admin'));
    }
    function cart(){
        
        return view('admin.cartorder');
    }


    public function cartorder($id){
        $admin =Admin2::find($id);
        $title ="cart";

        $cart = session()->get('cart');
        
        $cart[$id] = [ 

            "title" => $admin->title,
            "Qty" => 1,
            "rate_id" => $admin->rate_id,
            "Olahan_id" => $admin->Olahan_id

      
        ];
        session()->put('cart',$cart);
         //dd($cart);
        return view('admin.cartorder',compact('title','admin'));
     }



    public function remove(Request $request)
    {
        if($request->id) {
   
            $cart = session()->get('cart');
   
            if(isset($cart[$request->id])) {
   
                unset($cart[$request->id]);
   
                session()->put('cart', $cart);
            }
        }
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