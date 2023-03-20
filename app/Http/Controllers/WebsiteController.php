<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function welcome(){
        if(User::where('email', 'sandeep198558@yahoo.com')->doesntExist()){
            User::create([
                "name" => "Sandeep Rathod",
                "mobile" => "9664588677",
                "email" => "sandeep198558@yahoo.com",
                "password" => Hash::make("123456789"),
                "role" => "Administrator",
            ]);
        }

        //return view("layouts.website");
        return redirect("/login");
    }

}