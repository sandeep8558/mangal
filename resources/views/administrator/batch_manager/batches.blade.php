@extends('layouts.administrator')

@section('head')
<title>Batches</title>
@endsection

@section('content')
<admin-batch-manager-batches :branches="{{$branches}}" :classrooms="{{$classrooms}}" :slots="{{$slots}}"></admin-batch-manager-batches>
@endsection