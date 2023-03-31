@extends('layouts.staff')

@section('head')
<title>Staff Timetable</title>
@endsection

@section('content')

<div class="container-fluid p-3">

    <div>
        <a class="btn btn-sm btn-outline-primary mb-3" href="/mystaff/timetable?dt={{$prev}}">Previous</a>

        <a class="btn btn-sm mb-3 btn-default">{{$today}} - {{date('Y-m-d', strtotime("+6 day", strtotime($today)))}}</a>

        <a class="btn btn-sm btn-outline-primary mb-3 float-right" href="/mystaff/timetable?dt={{$next}}">Next</a>
    </div>

    <div class="accordion" id="accordionPanelsStayOpenExample">

        @for($i=0; $i<=6; $i++)
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo-{{$i}}">
                <button class="accordion-button {{$i == 0 ? '' : 'collapsed'}}" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo-{{$i}}" aria-expanded="{{$i == 0 ? 'true' : 'false'}}" aria-controls="panelsStayOpen-collapseTwo-{{$i}}">
                <strong> {{date('Y-m-d - l', strtotime("+$i day", strtotime($today)))}}</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo-{{$i}}" class="accordion-collapse collapse {{$i == 0 ? 'show' : ''}}" aria-labelledby="panelsStayOpen-headingTwo-{{$i}}">
                <div class="accordion-body">
                    <ul class="list-group">
                        @foreach($batches as $batch)
                            @if( $batch->open_batch->effective_from <= date('Y-m-d', strtotime("+$i day", strtotime($today))) && $batch->open_batch->effective_till >= date('Y-m-d', strtotime("+$i day", strtotime($today))) )
                                <li class="list-group-item">
                                    {{$batch->open_batch->batch_name}}
                                    <span class="float-right">
                                        @switch(date('l', strtotime("+$i day", strtotime($today))))
                                            @case('Monday')
                                            {{$batch->open_batch->mon_time}}
                                            @break
                                            @case('Tuesday')
                                            {{$batch->open_batch->tue_time}}
                                            @break
                                            @case('Wednesday')
                                            {{$batch->open_batch->wed_time}}
                                            @break
                                            @case('Thursday')
                                            {{$batch->open_batch->thu_time}}
                                            @break
                                            @case('Friday')
                                            {{$batch->open_batch->fri_time}}
                                            @break
                                            @case('Saturday')
                                            {{$batch->open_batch->sat_time}}
                                            @break
                                            @case('Sunday')
                                            {{$batch->open_batch->sun_time}}
                                            @break
                                        @endswitch
                                    </span>
                                    <!-- {{$batch->open_batch}} -->
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endfor

    </div>

</div>

@endsection