<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Models\Course;
use App\Models\AllDocument;
use App\Models\Branch;
use App\Models\CourseInstrument;

class StudentManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','administrator']);
    }

    public function students(){
        return view("administrator.student_manager.students");
    }

    public function student_education(){
        return view("administrator.student_manager.student_education");
    }

    public function student_qualification(){
        return view("administrator.student_manager.student_qualification");
    }

    public function student_employment(){
        return view("administrator.student_manager.student_employment");
    }

    public function student_courses(){
        $categories = CourseCategory::get(['category as key', 'id as value']);
        $branches = Branch::get(['location_name as key', 'id as value']);
        return view("administrator.student_manager.student_courses", compact("categories", "branches"));
    }

    public function student_course_documents(){
        $documents = AllDocument::get(['document_title as key', 'id as value']);
        return view("administrator.student_manager.student_course_documents", compact("documents"));
    }

    public function get_fee(Request $request){
        $material = CourseInstrument::where("course_id", $request->course_id)->with("material")->get();
        $fee = Course::with("fee")->find($request->course_id);
        return [
            "fee" => $fee,
            "material" => $material
        ];
    }
}
