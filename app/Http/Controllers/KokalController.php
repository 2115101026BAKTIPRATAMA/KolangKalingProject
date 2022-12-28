<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\rate;
use App\Models\Admin;

class KokalController extends Controller
{
    function index(){
        $title='Landing Page';
        $packages=Packages::all();
        $rates=rate::all();
        $admin=Admin::all();
      
        return view('frontpage.kokal', compact('title','packages','rates','admin'));
    }
}



