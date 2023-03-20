@extends('layouts.administrator')

@section('head')
<title>Student Courses</title>
@endsection

@section('content')
<admin-student-manager-student-courses :categories="{{$categories}}" :branches="{{$branches}}"></admin-student-manager-student-courses>
@endsection