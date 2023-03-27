<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function administrator(){
        return view("administrator.administrator");
    }

    public function user_manager(){
        return view("administrator.user_manager");
    }
}
