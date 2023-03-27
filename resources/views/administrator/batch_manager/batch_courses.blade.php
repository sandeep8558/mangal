@extends('layouts.administrator')

@section('head')
<title>Batch Courses</title>
@endsection

@section('content')
<admin-batch-manager-batch-courses :batches="{{$batches}}" :categories="{{$categories}}"></admin-batch-manager-batch-courses>
@endsection