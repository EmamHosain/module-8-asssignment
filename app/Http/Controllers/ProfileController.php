<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
    
        $id = $id;
        $name = "Donal Trump";
        $age = "75";

        $data = [
            "id"=> $id,
            "name"=>$name,
            "age"=>$age,
        ];

        # set cookie 
        $cookieName = "access_token";
        $value = "23-XYZ";
        $minutes = 60;
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];
        $secure = false;
        $httpOnly = true;
       

        return response("id: {$id}<br> name:{$name}<br> age{$age}",200)-> cookie($cookieName,$value,$minutes,$path,$domain,$secure,$httpOnly);

    }
}
