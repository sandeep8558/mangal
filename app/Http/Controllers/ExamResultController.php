<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;

class ExamResultController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','administrator']);
    }

    public function exam(){
        return view("administrator.exam_result_manager.exam");
    }

    public function batches($id){
        $batches = Batch::where('syllabus', 'Completed')->where('status', 'On Going')->get(['batch_name as key', 'id as value']);
        return view("administrator.exam_result_manager.batches", compact("id", "batches"));
    }

    public function students($id){
        return view("administrator.exam_result_manager.students", compact("id"));
    }

    public function result(){
        return view("administrator.exam_result_manager.result");
    }
}
