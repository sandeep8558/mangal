@extends('layouts.administrator')

@section('head')
<title>Batch Students</title>
@endsection

@section('content')
<admin-batch-manager-batch-students :batches="{{$batches}}"></admin-batch-manager-batch-students>
@endsection