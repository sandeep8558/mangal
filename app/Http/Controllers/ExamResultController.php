<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamResultController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','administrator']);
    }

    public function exam(){
        return view("administrator.exam_result_manager.exam");
    }

    public function result(){
        return view("administrator.exam_result_manager.result");
    }
}
