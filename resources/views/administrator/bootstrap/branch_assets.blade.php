@extends('layouts.administrator')

@section('head')
<title>Branch Assets</title>
@endsection

@section('content')
<admin-bootstrap-branch-assets :branches="{{$branches}}"></admin-bootstrap-branch-assets>
@endsection