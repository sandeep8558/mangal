@extends('layouts.administrator')

@section('head')
<title>Designation History</title>
@endsection

@section('content')
<admin-employee-manager-designation-history :designations="{{$designations}}"></admin-employee-manager-designation-history>
@endsection