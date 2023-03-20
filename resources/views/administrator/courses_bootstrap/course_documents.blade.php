@extends('layouts.administrator')

@section('head')
<title>Course Documents</title>
@endsection

@section('content')
<admin-course-bootstrap-course-documents :categories="{{$categories}}" :documents="{{$documents}}"></admin-course-bootstrap-course-documents>
@endsection