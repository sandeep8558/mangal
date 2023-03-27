@extends('layouts.administrator')

@section('head')
<title>Classroom</title>
@endsection

@section('content')
<admin-bootstrap-classroom :slots="{{$slots}}" :branches="{{$branches}}"></admin-bootstrap-classroom>
@endsection