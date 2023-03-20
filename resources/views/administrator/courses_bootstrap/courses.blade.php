@extends('layouts.administrator')

@section('head')
<title>Courses</title>
@endsection

@section('content')
<admin-course-bootstrap-courses :categories="{{$categories}}"></admin-course-bootstrap-courses>
@endsection