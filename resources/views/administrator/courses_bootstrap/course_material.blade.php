@extends('layouts.administrator')

@section('head')
<title>Course Material</title>
@endsection

@section('content')
<admin-course-bootstrap-course-material :categories="{{$categories}}"></admin-course-bootstrap-course-material>
@endsection