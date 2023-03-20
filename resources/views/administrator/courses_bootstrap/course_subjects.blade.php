@extends('layouts.administrator')

@section('head')
<title>Course Subjects</title>
@endsection

@section('content')
<admin-course-bootstrap-course-subjects :categories="{{$categories}}"></admin-course-bootstrap-course-subjects>
@endsection