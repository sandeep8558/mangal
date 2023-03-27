@extends('layouts.staff')

@section('head')
<title>Staff Dashboard</title>
@endsection

@section('content')

<div class="container-fluid p-3">


<form action="" method="GET">
    <div class="input-group mb-3">
        <input type="date" value="{{$today}}" name="dt" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" max="{{date('Y-m-d')}}">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">GO</button>
    </div>
</form>

    <div class="accordion" id="accordionExample">
        
        @foreach($batches as $key=>$batch)
            <?php $what = null; $slots = null; ?>
            <div class="accordion-item">
                
                <h2 class="accordion-header" id="heading_{{$key}}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$key}}" aria-expanded="false" aria-controls="collapse_{{$key}}">
                        {{$batch->open_batch->batch_name}} - {{date("l", strtotime($today))}} -
                        @switch(date("l", strtotime($today)))
                        
                        @case('Sunday')
                        <?php $what = $batch->open_batch->sun_time; $slots = $batch->open_batch->sun_slots; ?>
                        {{$batch->open_batch->sun_time}}
                        @break

                        @case('Monday')
                        <?php $what = $batch->open_batch->mon_time; $slots = $batch->open_batch->mon_slots; ?>
                        {{$batch->open_batch->mon_time}}
                        @break

                        @case('Tuesday')
                        <?php $what = $batch->open_batch->tue_time; $slots = $batch->open_batch->tue_slots; ?>
                        {{$batch->open_batch->tue_time}}
                        @break

                        @case('Wednesday')
                        <?php $what = $batch->open_batch->wed_time; $slots = $batch->open_batch->wed_slots; ?>
                        {{$batch->open_batch->wed_time}}
                        @break

                        @case('Thursday')
                        <?php $what = $batch->open_batch->thu_time; $slots = $batch->open_batch->thu_slots; ?>
                        {{$batch->open_batch->thu_time}}
                        @break

                        @case('Friday')
                        <?php $what = $batch->open_batch->fri_time; $slots = $batch->open_batch->fri_slots; ?>
                        {{$batch->open_batch->fri_time}}
                        @break

                        @case('Saturday')
                        <?php $what = $batch->open_batch->sat_time; $slots = $batch->open_batch->sat_slots; ?>
                        {{$batch->open_batch->sat_time}}
                        @break

                        @endswitch
                    </button>
                </h2>

                <div id="collapse_{{$key}}" class="accordion-collapse collapse  {{$key == 0 ? 'show' : ''}}" aria-labelledby="heading_{{$key}}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h4 class="mb-3 mt-4">Batch Information</h4>
                        <div class="list-group">

                            <a class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between p-2">
                                    <h5 class="m-0">Classroom :</h5>
                                    <p class="m-0">{{$batch->open_batch->classroom->classroom_name}}</p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between p-2">
                                    <h5 class="m-0">Course :</h5>
                                    <p class="m-0">
                                        @if($batch->open_batch->batch_courses)
                                        @foreach($batch->open_batch->batch_courses as $key=>$course)
                                        {{$course->course->course}} ({{$course->course->id}})<br>
                                        @endforeach
                                        @endif
                                    </p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between p-2">
                                    <h5 class="m-0">Faculties :</h5>
                                    <p class="m-0">
                                        @foreach($batch->open_batch->batch_faculties as $key=>$faculty)
                                        {{$faculty->staff->employee_name}}{{(sizeof($batch->open_batch->batch_faculties)-1) == $key ? "" : "," }}
                                        @endforeach
                                    </p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between p-2">
                                    <h5 class="m-0">Status :</h5>
                                    <p class="m-0">{{$batch->open_batch->status}}</p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between p-2">
                                    <h5 class="m-0">Is Syllabus Completed :</h5>
                                    <p class="m-0">
                                        <?php $disabled = sizeof($batch->open_batch->batch_sessions) >= $batch->open_batch->sessions ? '1' : '0'; ?>
                                        <staff-switch :options="['Pending', 'Completed']" :value="'{{$batch->open_batch->syllabus}}'" :model="'Batch'" :column="'syllabus'" :id="{{$batch->open_batch->id}}" :disabled="{{$disabled}}"></staff-switch>
                                    </p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between p-2">
                                    <h5 class="m-0">Mark Entry :</h5>
                                    <p class="m-0">
                                        <staff-switch :options="['Pending', 'Completed']" :value="'{{$batch->open_batch->markentry}}'" :model="'Batch'" :column="'markentry'" :id="{{$batch->open_batch->id}}" :disabled="{{$disabled}}"></staff-switch>
                                    </p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between p-2">
                                    <h5 class="m-0">Effective From :</h5>
                                    <p class="m-0">{{$batch->open_batch->effective_from}}</p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between p-2">
                                    <h5 class="m-0">Effective Till :</h5>
                                    <p class="m-0">{{$batch->open_batch->effective_till}}</p>
                                </div>
                            </a>

                        </div>

                        @if($what != 'No Lecture')
                        <div class="container-fluid px-0 py-3">
                            <staff-session-start :batch="{{$batch}}" :today="'{{$today}}'" :slots="{{$slots}}"></staff-session-start>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        @endforeach

    </div>

</div>



@endsection