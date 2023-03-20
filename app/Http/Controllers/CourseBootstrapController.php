<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Models\AllDocument;

class CourseBootstrapController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','administrator']);
    }

    public function related_documents(){
        return view("administrator.courses_bootstrap.related_documents");
    }

    public function course_category(){
        return view("administrator.courses_bootstrap.course_category");
    }

    public function courses(){
        $categories = CourseCategory::get(['category as key', 'id as value']);
        return view("administrator.courses_bootstrap.courses", compact("categories"));
    }

    public function course_subjects(){
        $categories = CourseCategory::get(['category as key', 'id as value']);
        return view("administrator.courses_bootstrap.course_subjects", compact("categories"));
    }

    public function course_fees(){
        $categories = CourseCategory::get(['category as key', 'id as value']);
        return view("administrator.courses_bootstrap.course_fees", compact("categories"));
    }

    public function course_documents(){
        $documents = AllDocument::get(['document_title as key', 'id as value']);
        $categories = CourseCategory::get(['category as key', 'id as value']);
        return view("administrator.courses_bootstrap.course_documents", compact("categories", "documents"));
    }

    public function course_sections(){
        $categories = CourseCategory::get(['category as key', 'id as value']);
        return view("administrator.courses_bootstrap.course_sections", compact("categories"));
    }

    public function course_material(){
        $categories = CourseCategory::get(['category as key', 'id as value']);
        return view("administrator.courses_bootstrap.course_material", compact("categories"));
    }

}
