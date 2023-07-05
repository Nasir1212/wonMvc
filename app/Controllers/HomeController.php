<?php
namespace App\Controllers;

class HomeController{


    public static function index(){

        echo "bootstrap working";

    }


    public function test(){
        $name = "Nasir Uddin";
        return view("home.index",compact("name"));
    }
}