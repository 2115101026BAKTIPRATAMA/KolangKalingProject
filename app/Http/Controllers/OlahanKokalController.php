<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Olahan;

class OlahanKokalController extends Controller
{
    function index(){

      
        return view('admin.OlahanKokal');
    }
    function tambaholahan(Request $request){

      $data = new Olahan;
      $data->jenis_olahan=$request->olahan;

      $data->save();

      return redirect('admin');

        
    }
}
