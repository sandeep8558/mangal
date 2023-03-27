<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\ClassroomSlot;

class BootstrapController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','administrator']);
    }

    public function accreditation(){
        return view("administrator.bootstrap.accreditation");
    }

    public function branches(){
        return view("administrator.bootstrap.branches");
    }

    public function branch_assets(){
        $branches = Branch::get(['location_name as key', 'id as value']);
        return view("administrator.bootstrap.branch_assets", compact('branches'));
    }

    public function salary_group(){
        return view("administrator.bootstrap.salary_group");
    }

    public function designation(){
        return view("administrator.bootstrap.designation");
    }

    public function classroom_slots(){
        return view("administrator.bootstrap.classroom_slots");
    }

    public function classroom(){
        $slots = ClassroomSlot::get(['name as key', 'id as value']);
        $branches = Branch::get(['location_name as key', 'id as value']);
        return view("administrator.bootstrap.classroom", compact('slots', 'branches'));
    }
}
