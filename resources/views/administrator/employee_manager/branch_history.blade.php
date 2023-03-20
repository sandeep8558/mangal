@extends('layouts.administrator')

@section('head')
<title>Branch History</title>
@endsection

@section('content')
<admin-employee-manager-branch-history :branches="{{$branches}}"></admin-employee-manager-branch-history>
@endsection