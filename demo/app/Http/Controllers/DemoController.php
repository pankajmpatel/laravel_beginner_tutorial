<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
   public function about(){
     return view('about');
    }
    public function contact(){

        $services=\App\Service::all();

        return view('service',compact('services'));
       }
}
