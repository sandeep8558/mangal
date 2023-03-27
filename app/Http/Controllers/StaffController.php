<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Staff;
use App\Models\BatchSession;
use App\Models\Batch;
use App\Models\SessionAttendance;

class StaffController extends Controller
{
    public function staff(Request $request){
        $today = date("Y-m-d");
        if(isset($request->dt)){
            $today = $request->dt;
        }
        $email = Auth::user()->email;
        $staff = Staff::where('email', $email)->latest()->first();
        
        $batches = $staff
        ->batch_faculties()
        ->whereHas("open_batch", function($q) use($today){
            $q
            ->whereDate("effective_from", "<=", $today)
            ->whereDate("effective_till", ">=", $today);
        })
        ->with("open_batch", function($qq) use($today) {
            $qq
            ->with("batch_students")
            ->with("batch_sessions");
        })
        ->get();

        return view("staff.staff", compact("staff", "batches", "today"));
    }

    public function check_batch_session(Request $request){
        $session = BatchSession::where("batch_id", $request->batch_id)->whereDate("dt", $request->dt);
        if($session->exists()){
            $s = $session->with("session_attendances")->first();
            foreach(Batch::find($request->batch_id)->batch_students as $student){
                if(SessionAttendance::where("batch_session_id", $s->id)->where("student_course_id", $student->student_course_id)->doesntExist()){
                    $s->session_attendances()->create([
                        "student_course_id" => $student->student_course_id,
                        "status" => "Absent"
                    ]);
                }
            }
            return $s;
        } else {
            $a = Batch::where("id", $request->batch_id)->has("batch_students");
            if($a->exists()){
                $batch = Batch::find($request->batch_id);
                if($request->dt >= $batch->effective_from){

                    $batch_session = BatchSession::create($request->all());
                    foreach($batch->batch_students as $student){
                        $batch_session->session_attendances()->create([
                            "student_course_id" => $student->student_course_id,
                            "status" => "Present"
                        ]);
                    }
                    return $batch_session->with("session_attendances");

                } else {
                    return $request;
                }
                
                
            } else {
                return $request;
            }
        }
    }

    public function update_attendance(Request $request){
        return SessionAttendance::find($request->id)->update(["status" => $request->status]);
    }

    public function table_update(Request $request){
        $model_name = '\\App\\Models\\'.$request->model;
        $model = new $model_name;
        $update = $model->find($request->id)->update([
            $request->column => $request->value
        ]);
        return $update;
    }

    public function timetable(Request $request){

        $today = date("Y-m-d");
        if(isset($request->dt)){
            $today = $request->dt;
        }
        $next = strtotime($today);
        $next = strtotime("+7 day", $next);
        $next = date('Y-m-d', $next);

        $prev = strtotime($today);
        $prev = strtotime("-7 day", $prev);
        $prev = date('Y-m-d', $prev);

        $email = Auth::user()->email;
        $staff = Staff::where('email', $email)->latest()->first();
        
        $batches = $staff
        ->batch_faculties()
        ->whereHas("open_batch", function($q) use($today, $next){
            $q
            ->whereDate("effective_from", "<", $next)
            ->whereDate("effective_till", ">=", $today);
        })
        /* ->with("open_batch", function($qq) use($today) {
            $qq
            ->with("batch_students")
            ->with("batch_sessions");
        }) */
        ->get();

        return view("staff.timetable", compact("prev", "today", "next", "batches"));
    }
}
