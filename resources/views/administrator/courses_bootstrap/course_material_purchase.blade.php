@extends('layouts.administrator')

@section('head')
<title>Material Purchase</title>
@endsection

@section('content')
<admin-course-bootstrap-course-material-purchase :material="{{$material}}"></admin-course-bootstrap-course-material-purchase>
@endsection