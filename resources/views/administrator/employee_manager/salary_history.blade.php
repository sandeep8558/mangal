@extends('layouts.administrator')

@section('head')
<title>Salary History</title>
@endsection

@section('content')
<admin-employee-manager-salary-history :salary_groups="{{$salary_groups}}"></admin-employee-manager-salary-history>
@endsection