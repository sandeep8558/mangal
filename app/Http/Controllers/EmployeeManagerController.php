<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designation;
use App\Models\Branch;
use App\Models\SalaryGroup;

class EmployeeManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','administrator']);
    }

    public function staff_manager(){
        return view("administrator.employee_manager.staff_manager");
    }

    public function staff_documents(){
        return view("administrator.employee_manager.staff_documents");
    }

    public function designation_history(){
        $designations = Designation::get(['designation as key', 'id as value']);
        return view("administrator.employee_manager.designation_history", compact("designations"));
    }

    public function branch_history(){
        $branches = Branch::get(['location_name as key', 'id as value']);
        return view("administrator.employee_manager.branch_history", compact("branches"));
    }

    public function salary_history(){
        $salary_groups = SalaryGroup::get(['salary_group_name as key', 'id as value']);
        return view("administrator.employee_manager.salary_history", compact("salary_groups"));
    }

    public function reviews(){
        return view("administrator.employee_manager.reviews");
    }
}
