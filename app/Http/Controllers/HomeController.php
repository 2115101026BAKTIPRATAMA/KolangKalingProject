<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\rate;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    function index(){
        $title='Landing Page';
        $packages=Packages::all();
        // //dd($packages);
        // $rates=rate::all();
        ///dd($packages);
        //[(object)[
        //     'package_code'=>'coba 1',
        //     'package_name'=>'coba 1',
        //     'package_desc'=>'coba 1'          
        // ],
        // (object)[
        //     'package_code'=>'coba 2',
        //     'package_name'=>'coba 2',
        //     'package_desc'=>'coba 2'

        // ],
        // (object)[
        //     'package_code'=>'coba 2',
        //     'package_name'=>'coba 2',
        //     'package_desc'=>'coba 2'

        // ]];
        // $packages=Packages::all();
        // , compact('title','packages','rates')
        return view('frontpage.kokal', compact('title','packages','rates'));
    } 

}

