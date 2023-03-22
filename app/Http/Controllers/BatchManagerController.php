<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\ClassroomSlot;
use App\Models\Classroom;
use App\Models\Batch;
use App\Models\Staff;
use App\Models\StudentCourse;

class BatchManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','administrator']);
    }

    public function batches(){
        $branches = Branch::get(['location_name as key', 'id as value']);
        $slots = ClassroomSlot::get(['name as key', 'id as value']);
        $classrooms = Classroom::get(['classroom_name as key', 'id as value']);
        return view("administrator.batch_manager.batches", compact("branches", "slots", "classrooms"));
    }

    public function batch_faculties(){
        $batches = Batch::get(['batch_name as key', 'id as value']);
        $faculties = Staff::where('exit', null)->get(['employee_name as key', 'id as value']);
        return view("administrator.batch_manager.batch_faculties", compact("batches", "faculties"));
    }

    public function batch_students(){
        $batches = Batch::get(['batch_name as key', 'id as value']);
        $students = StudentCourse::
        doesntHave("batch_students")
        ->get();
        return view("administrator.batch_manager.batch_students", compact("batches", "students"));
    }

    public function batch_sessions(){
        return view("administrator.batch_manager.batch_sessions");
    }

    public function session_attendance(){
        return view("administrator.batch_manager.session_attendance");
    }
}
