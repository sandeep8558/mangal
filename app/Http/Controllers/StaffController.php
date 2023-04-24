<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Staff;
use App\Models\BatchSession;
use App\Models\Batch;
use App\Models\SessionAttendance;
use App\Models\Examination;

class StaffController extends Controller
{

    public function __construct(){
        $this->middleware(['auth']);
    }

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

    public function exam(){

        $today = date("Y-m-d");
        if(isset($request->dt)){
            $today = $request->dt;
        }
        $email = Auth::user()->email;
        $staff = Staff::where('email', $email)->latest()->first();
        
        $batches = $staff
        ->batch_faculties()
        ->whereHas("open_batch", function($q){
            $q
            ->where("syllabus", "Completed")
            ->where("status", "On Going");
        })
        ->with("open_batch", function($qq) {
            $qq
            ->with("batch_students")
            ->with("batch_courses", function($qqq){
                $qqq->with("course", function($qqqq){
                    $qqqq->with("subjects");
                });
            });
        })
        ->get();

        $staffs = Staff::where("exit", null)->orWhere("exit", "")->get();

        $classrooms = $branch_id = $staff->branch_histories()->latest()->first()->branch->classrooms;

        $exams = Examination::
        with("exam_students")
        ->with("exam_batches")
        ->with("exam_subjects", function($q) {
            $q->with("exam_subject_invigilators");
        })
        ->orderBy("id", "desc")
        ->simplePaginate(10);

        return view("staff.exam", compact("batches", "today", "staffs", "classrooms", "exams"));
    }

    public function exam_save(Request $request){

        $exam = Examination::create([
            "exam_name" => $request->data["exam_name"]
        ]);

        foreach($request->data["batches"] as $batch){
            $exam->exam_batches()->create([
                "batch_id" => $batch
            ]);
        }

        foreach($request->data["students"] as $student){
            $exam->exam_students()->create([
                "student_course_id" => $student
            ]);
        }

        foreach($request->data["subjects"] as $subject){
            $sub = $exam->exam_subjects()->create([
                "dt" => $subject["dt"],
                "total_marks" => $subject["total_marks"],
                "subject_id" => $subject["subject_id"],
            ]);

            foreach($subject["invigilator"] as $invi){
                $sub->exam_subject_invigilators()->create([
                    "staff_id" => $invi
                ]);
            }
        }

        $e = Examination::
        with("exam_students")
        ->with("exam_batches")
        ->with("exam_subjects", function($q) {
            $q->with("exam_subject_invigilators");
        })
        ->find($exam->id);

        return response()->json($e);

    }

    public function exam_all(Request $request){
        $exams = Examination::
        with("exam_students")
        ->with("exam_batches", function($q){
            $q->with("batch");
        })
        ->with("exam_subjects", function($q) {
            $q
            ->with("subject")
            ->with("exam_subject_invigilators", function($q){
                $q->with("staff");
            });
        })
        ->orderBy("id", "desc")
        ->simplePaginate(10);

        return $exams;
    }

    public function exam_delete(Request $request){
        return Examination::find($request->exam_id)->delete();
    }

    public function result(){
        return view("staff.result");
    }

}