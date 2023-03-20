@extends('layouts.administrator')

@section('head')
<title>Course Fees</title>
@endsection

@section('content')
<admin-course-bootstrap-course-fees :categories="{{$categories}}"></admin-course-bootstrap-course-fees>
@endsection