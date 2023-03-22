@extends('layouts.administrator')

@section('head')
<title>Batch Faculties</title>
@endsection

@section('content')
<admin-batch-manager-batch-faculties :batches="{{$batches}}" :faculties="{{$faculties}}"></admin-batch-manager-batch-faculties>
@endsection