<?php
namespace App\Controllers;
use Core\Request;

class HomeController{


    public static function index(){

        echo "bootstrap working";

    }


    public function test(Request $request){
        $name = "Nasir Uddin";
    
        print_r($request);
        return view("home.index",compact("name","test"));
    }
}