@extends('layouts.staff')

@section('head')
<title>Exam Manager</title>
@endsection

@section('content')

<div class="container-fluid p-3">

    <staff-exam :batches="{{$batches}}" :staffs="{{$staffs}}" :classrooms="{{$classrooms}}"></staff-exam>

</div>

@endsection