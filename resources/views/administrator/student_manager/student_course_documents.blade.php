@extends('layouts.administrator')

@section('head')
<title>Student Course Documents</title>
@endsection

@section('content')
<admin-student-manager-student-course-documents :documents="{{$documents}}"></admin-student-manager-student-course-documents>
@endsection