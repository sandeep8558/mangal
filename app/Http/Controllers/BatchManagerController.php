<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\ClassroomSlot;
use App\Models\Classroom;
use App\Models\Batch;
use App\Models\Staff;
use App\Models\StudentCourse;
use App\Models\CourseCategory;
use App\Models\BatchCourse;

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
        return view("administrator.batch_manager.batch_students", compact("batches"));
    }

    public function get_students(Request $request){
        $courses = BatchCourse::where("batch_id", $request->batch_id)->pluck("course_id");
        return $students = StudentCourse::
        whereIn("course_id", $courses)
        ->doesntHave("batch_students")
        ->get();
    }

    public function batch_courses(){
        $batches = Batch::get(['batch_name as key', 'id as value']);
        $categories = CourseCategory::get(['category as key', 'id as value']);
        return view("administrator.batch_manager.batch_courses", compact("batches", "categories"));
    }

    public function batch_sessions(){
        return view("administrator.batch_manager.batch_sessions");
    }

    public function session_attendance(){
        return view("administrator.batch_manager.session_attendance");
    }

}
