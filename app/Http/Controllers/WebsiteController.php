<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Branch;
use App\Models\SalaryGroup;
use App\Models\Designation;
use App\Models\ClassroomSlot;
use App\Models\Classroom;
use App\Models\AllDocument;
use App\Models\Material;
use App\Models\CourseMaterialPurchase;
use App\Models\CourseCategory;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Fee;
use App\Models\CourseDocument;
use App\Models\CourseSection;
use App\Models\CourseInstrument;

use App\Models\Staff;
use App\Models\DesignationHistory;
use App\Models\BranchHistory;
use App\Models\SalaryHistory;

use App\Models\Student;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function welcome(){
        if(User::where('email', 'sandeep198558@yahoo.com')->doesntExist()){
            $this->bootstrap();
        }

        //return view("layouts.website");
        return redirect("/login");
    }

    public function bootstrap(){
        User::create([
            "name" => "Sandeep Rathod",
            "mobile" => "9664588677",
            "email" => "sandeep198558@yahoo.com",
            "password" => Hash::make("123456789"),
            "role" => "Administrator",
        ]);

        Branch::create([
            "status" => "Active",
            "location_name" => "Ambernath East",
            "address" => "Station Road",
            "city" => "Ambernath",
            "pincode" => "421501",
            "state" => "Maharashtra",
            "country" => "India",
            "contact_number" => "9664588677",
            "email" => "sandeep198558@yahoo.com",
        ]);

        SalaryGroup::insert([
            [
                "display"=>"Show",
                "salary_group_name"=>"Rs 200 per Hour",
                "description"=>"Rs 200 per Hour",
                "payment_type"=>"Hourly",
                "working_minutes_per_day"=>"60",
                "salary_amount"=>"200",
                "basic"=>"0",
                "houserent"=>"0",
                "dearness"=>"0",
                "conveyance"=>"0",
                "travelling"=>"0",
                "employee_pf"=>"0",
                "employer_pf"=>"0",
                "professional_tax"=>"0",
                "esic"=>"0",
                "otperhr"=>"0",
                "bonus"=>"0",
            ],
            [
                "display"=>"Show",
                "salary_group_name"=>"Rs 5000 per Month",
                "description"=>"Rs 5000 per Month",
                "payment_type"=>"Monthly",
                "working_minutes_per_day"=>"60",
                "salary_amount"=>"5000",
                "basic"=>"0",
                "houserent"=>"0",
                "dearness"=>"0",
                "conveyance"=>"0",
                "travelling"=>"0",
                "employee_pf"=>"0",
                "employer_pf"=>"0",
                "professional_tax"=>"0",
                "esic"=>"0",
                "otperhr"=>"0",
                "bonus"=>"0",
            ],
        ]);

        Designation::insert([
            [
                "display"=>"Show",
                "designation"=>"Teacher",
                "description"=>"Teacher",
            ],
            [
                "display"=>"Show",
                "designation"=>"Office Admin",
                "description"=>"Office Admin",
            ]
        ]);

        ClassroomSlot::insert([
            [
                "order"=>"1",
                "name"=>"09:00 to 10:00",
                "description"=>"09:00 to 10:00",
                "from"=>"09:00",
                "to"=>"10:00",
                "minutes"=>"60",
            ],
            [
                "order"=>"1",
                "name"=>"10:00 to 11:00",
                "description"=>"10:00 to 11:00",
                "from"=>"10:00",
                "to"=>"11:00",
                "minutes"=>"60",
            ],
            [
                "order"=>"1",
                "name"=>"11:00 to 12:00",
                "description"=>"11:00 to 12:00",
                "from"=>"11:00",
                "to"=>"12:00",
                "minutes"=>"60",
            ],
            [
                "order"=>"1",
                "name"=>"12:00 to 13:00",
                "description"=>"12:00 to 13:00",
                "from"=>"12:00",
                "to"=>"13:00",
                "minutes"=>"60",
            ],
            [
                "order"=>"1",
                "name"=>"13:00 to 14:00",
                "description"=>"13:00 to 14:00",
                "from"=>"13:00",
                "to"=>"14:00",
                "minutes"=>"60",
            ],
            [
                "order"=>"1",
                "name"=>"14:00 to 15:00",
                "description"=>"14:00 to 15:00",
                "from"=>"14:00",
                "to"=>"15:00",
                "minutes"=>"60",
            ],
        ]);

        Classroom::insert([
            [
                "branch_id"=>"1",
                "display"=>"Show",
                "classroom_name"=>"CAD Room",
                "description"=>"CAD Room",
                "seating_capacity"=>"10",
                "pc_capacity"=>"10",
                "slots"=>"1,2,3,4,5,6",
            ],
            [
                "branch_id"=>"1",
                "display"=>"Show",
                "classroom_name"=>"Jal Room",
                "description"=>"Jal Room",
                "seating_capacity"=>"10",
                "pc_capacity"=>"10",
                "slots"=>"1,2,3,4,5,6",
            ],
        ]);

        AllDocument::insert([
            [
                "display" => "Show",
                "document_title" => "Passport Size Photo",
            ],
            [
                "display" => "Show",
                "document_title" => "Aadhar Card",
            ],
            [
                "display" => "Show",
                "document_title" => "PAN Card",
            ],
        ]);

        Material::insert([
            [
                "amount"=>"200",
                "name"=>"Book and Pen",
                "description"=>"Book and Pen",
            ],
            [
                "amount"=>"500",
                "name"=>"Books",
                "description"=>"Books",
            ],
            [
                "amount"=>"100",
                "name"=>"Pen",
                "description"=>"Pen",
            ],
        ]);

        CourseMaterialPurchase::insert([
            [
                "course_instrument_id"=>"1",
                "dt"=>"2023-03-01",
                "amount"=>"100",
                "qty"=>"10",
                "narration"=>"Purchased",
            ],
            [
                "course_instrument_id"=>"2",
                "dt"=>"2023-03-01",
                "amount"=>"100",
                "qty"=>"10",
                "narration"=>"Purchased",
            ],
            [
                "course_instrument_id"=>"3",
                "dt"=>"2023-03-01",
                "amount"=>"100",
                "qty"=>"10",
                "narration"=>"Purchased",
            ],
        ]);

        CourseCategory::insert([
            [
                "display"=>"Show",
                "typeof"=>"Course",
                "order"=>"1",
                "category"=>"Government Courses",
                "description"=>"Government Courses",
            ],
            [
                "display"=>"Show",
                "typeof"=>"Course",
                "order"=>"2",
                "category"=>"Autocad 2D & 3D",
                "description"=>"Autocad 2D & 3D",
            ],
        ]);

        Course::insert([
            [
                "category_id"=>"1",
                "display"=>"Show",
                "certification"=>"Outside",
                "durationtype"=>"Monthly",
                "duration"=>"2",
                "order"=>"1",
                "course"=>"English Typing",
                "description"=>"English Typing",
            ],
            [
                "category_id"=>"1",
                "display"=>"Show",
                "certification"=>"Outside",
                "durationtype"=>"Monthly",
                "duration"=>"2",
                "order"=>"2",
                "course"=>"Hindi Typing",
                "description"=>"Hindi Typing",
            ],
            [
                "category_id"=>"2",
                "display"=>"Show",
                "certification"=>"Own",
                "durationtype"=>"Monthly",
                "duration"=>"2",
                "order"=>"1",
                "course"=>"Mechanical Autocad",
                "description"=>"Mechanical Autocad",
            ],
            [
                "category_id"=>"2",
                "display"=>"Show",
                "certification"=>"Own",
                "durationtype"=>"Monthly",
                "duration"=>"2",
                "order"=>"1",
                "course"=>"Civil Autocad",
                "description"=>"Civil Autocad",
            ],
        ]);

        Fee::insert([
            [
                "category_id"=>"1",
                "course_id"=>"1",
                "effective_from"=>"2023-01-01",
                "effective_till"=>"2023-12-31",
                "fees_amount"=>"3000",
                "remark"=>"Ok",
            ],
            [
                "category_id"=>"1",
                "course_id"=>"2",
                "effective_from"=>"2023-01-01",
                "effective_till"=>"2023-12-31",
                "fees_amount"=>"4000",
                "remark"=>"Ok",
            ],
            [
                "category_id"=>"2",
                "course_id"=>"3",
                "effective_from"=>"2023-01-01",
                "effective_till"=>"2023-12-31",
                "fees_amount"=>"5000",
                "remark"=>"Ok",
            ],
            [
                "category_id"=>"2",
                "course_id"=>"4",
                "effective_from"=>"2023-01-01",
                "effective_till"=>"2023-12-31",
                "fees_amount"=>"6000",
                "remark"=>"Ok",
            ],
        ]);

        Subject::insert([
            [
                "category_id"=>"1",
                "course_id"=>"1",
                "status"=>"Active",
                "subject"=>"Theory",
                "description"=>"Theory",
            ],
            [
                "category_id"=>"1",
                "course_id"=>"1",
                "status"=>"Active",
                "subject"=>"Practical",
                "description"=>"Practical",
            ],
            [
                "category_id"=>"1",
                "course_id"=>"2",
                "status"=>"Active",
                "subject"=>"Theory",
                "description"=>"Theory",
            ],
            [
                "category_id"=>"1",
                "course_id"=>"2",
                "status"=>"Active",
                "subject"=>"Practical",
                "description"=>"Practical",
            ],
            [
                "category_id"=>"2",
                "course_id"=>"3",
                "status"=>"Active",
                "subject"=>"Practical",
                "description"=>"Practical",
            ],
            [
                "category_id"=>"2",
                "course_id"=>"4",
                "status"=>"Active",
                "subject"=>"Practical",
                "description"=>"Practical",
            ],
        ]);

        CourseDocument::insert([
            [
                "category_id"=>"1",
                "course_id"=>"1",
                "all_document_id"=>"2",
            ],
            [
                "category_id"=>"1",
                "course_id"=>"2",
                "all_document_id"=>"2",
            ],
            [
                "category_id"=>"2",
                "course_id"=>"3",
                "all_document_id"=>"2",
            ],
            [
                "category_id"=>"2",
                "course_id"=>"4",
                "all_document_id"=>"2",
            ],
        ]);

        CourseSection::insert([
            [
                "category_id"=>"1",
                "course_id"=>"1",
                "display"=>"Show",
                "section"=>"Full",
            ],
            [
                "category_id"=>"1",
                "course_id"=>"2",
                "display"=>"Show",
                "section"=>"Full",
            ],
            [
                "category_id"=>"2",
                "course_id"=>"3",
                "display"=>"Show",
                "section"=>"Full",
            ],
            [
                "category_id"=>"2",
                "course_id"=>"4",
                "display"=>"Show",
                "section"=>"Full",
            ],
        ]);

        CourseInstrument::insert([
            [
                "category_id"=>"1",
                "course_id"=>"1",
                "material_id"=>"2",
            ],
            [
                "category_id"=>"1",
                "course_id"=>"2",
                "material_id"=>"2",
            ],
            [
                "category_id"=>"2",
                "course_id"=>"3",
                "material_id"=>"2",
            ],
            [
                "category_id"=>"2",
                "course_id"=>"4",
                "material_id"=>"2",
            ],
        ]);

        Staff::insert([
            [
                "employee_name"=>"Sandeep Rathod",
                "dob"=>"1985-10-27",
                "joining"=>"2023-03-01",
                "gender"=>"Male",
                "blood_group"=>"O+",
                "aadhar"=>"123412341234",
                "pan"=>"AKTPR2313Q",
                "address"=>"Sai Section, Hutatma Chowk",
                "city"=>"Ambernath",
                "pincode"=>"421501",
                "state"=>"Maharashtra",
                "country"=>"India",
                "contact_number"=>"9664588677",
                "email"=>"sandeep198558@yahoo.com",
            ],
            [
                "employee_name"=>"Kiran Gaikwad",
                "dob"=>"1986-01-12",
                "joining"=>"2023-03-01",
                "gender"=>"Male",
                "blood_group"=>"O+",
                "aadhar"=>"123412341234",
                "pan"=>"AKTPR2313Q",
                "address"=>"Vadavali Section",
                "city"=>"Ambernath",
                "pincode"=>"421501",
                "state"=>"Maharashtra",
                "country"=>"India",
                "contact_number"=>"1234567890",
                "email"=>"kiran@yahoo.com",
            ],
        ]);

        DesignationHistory::insert([
            [
                "staff_id"=>"1",
                "designation_id"=>"1",
                "effective_from"=>"2023-03-01",
                "remark"=>"Ok",
            ],
            [
                "staff_id"=>"2",
                "designation_id"=>"2",
                "effective_from"=>"2023-03-01",
                "remark"=>"Ok",
            ],
        ]);

        BranchHistory::insert([
            [
                "staff_id"=>"1",
                "branch_id"=>"1",
                "effective_from"=>"2023-03-01",
                "remark"=>"Ok",
            ],
            [
                "staff_id"=>"2",
                "branch_id"=>"1",
                "effective_from"=>"2023-03-01",
                "remark"=>"Ok",
            ],
        ]);

        SalaryHistory::insert([
            [
                "staff_id"=>"1",
                "salary_group_id"=>"1",
                "effective_from"=>"2023-03-01",
                "remark"=>"Ok",
            ],
            [
                "staff_id"=>"2",
                "salary_group_id"=>"2",
                "effective_from"=>"2023-03-01",
                "remark"=>"Ok",
            ],
        ]);

        Student::insert([
            [
                "fname"=>"Royce",
                "mname"=>"Sandeep",
                "lname"=>"Rathod",
                "gender"=>"male",
                "dob"=>"2017-04-07",
                "fathersname"=>"Vilas",
                "mothersname"=>"Leena",
                "address"=>"Kunthu Apartment, Bldg No 17, Sarvoday Nagar",
                "city"=>"Ambernath",
                "pincode"=>"421505",
                "state"=>"Maharashtra",
                "country"=>"India",
                "permanent_address"=>"Kunthu Apartment, Bldg No 17, Sarvoday Nagar",
                "permanent_city"=>"Ambernath",
                "permanent_pincode"=>"421505",
                "permanent_state"=>"Maharashtra",
                "permanent_country"=>"India",
                "email"=>"roycerathod@gmail.com",
                "contact_number"=>"9664588677",
                "parents_number"=>"9664588677",
                "instagram_id"=>"roycerathod",
                "facebook_id"=>"roycerathod",
            ],
            [
                "fname"=>"Peter",
                "mname"=>"Prabhu",
                "lname"=>"Das",
                "gender"=>"male",
                "dob"=>"1995-07-24",
                "fathersname"=>"Prabhu",
                "mothersname"=>"Grace",
                "address"=>"Kunthu Apartment, Bldg No 17, Sarvoday Nagar",
                "city"=>"Ambernath",
                "pincode"=>"421505",
                "state"=>"Maharashtra",
                "country"=>"India",
                "permanent_address"=>"Kunthu Apartment, Bldg No 17, Sarvoday Nagar",
                "permanent_city"=>"Ambernath",
                "permanent_pincode"=>"421505",
                "permanent_state"=>"Maharashtra",
                "permanent_country"=>"India",
                "email"=>"peterdas@gmail.com",
                "contact_number"=>"9664588677",
                "parents_number"=>"9664588677",
                "instagram_id"=>"peterdas",
                "facebook_id"=>"peterdas",
            ],
        ]);
    }

}