<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','administrator']);
    }

    public function settings(){
        return view("administrator.settings");
    }
}
