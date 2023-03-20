@extends('layouts.administrator')

@section('head')
<title>Course Sections</title>
@endsection

@section('content')
<admin-course-bootstrap-course-sections :categories="{{$categories}}"></admin-course-bootstrap-course-sections>
@endsection