@extends('layouts.staff')

@section('head')
<title>Exam Manager</title>
@endsection

@section('content')

<div class="container-fluid p-3">
    <staff-exam :batches="{{$batches}}" :staffs="{{$staffs}}" :classrooms="{{$classrooms}}"></staff-exam>
</div>

<!-- <div class="container-fluid p-3">
    <div class="row m-0 mb-4">
        <div class="col-12">
            {{ $exams->appends(request()->except('page'))->links() }}
        </div>
    </div>
    
    @foreach($exams as $exam)
        <div class="row m-0 mb-4">
            <div class="col-12">
                <h4>{{ $exam->exam_name }}</h4>
                @foreach($exam->exam_batches as $batch)
                {{ $batch->batch->batch_name }}
                @endforeach
            </div>
            <div class="col-12">
                @foreach($exam->exam_subjects as $subject)
                <div class="row">
                    <div class="col">
                        {{ $subject->subject->subject }}
                    </div>
                    @foreach($subject->exam_subject_invigilators as $invigilator)
                    <div class="col-auto">
                        {{ $invigilator->staff->employee_name }}@if ( ! $loop->last) ,@endif
                    </div>
                    @endforeach
                    <div class="col-auto">
                        {{ $subject->dt }}
                    </div>
                    <div class="col-auto">
                        {{ $subject->total_marks }}
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-12">
                <button class="btn btn-outline-warning btn-sm">Edit</button>
                <button class="btn btn-outline-danger btn-sm">Delete</button>
            </div>
        </div>
        @if ( ! $loop->last)<hr>@endif
    @endforeach
</div> -->

@endsection