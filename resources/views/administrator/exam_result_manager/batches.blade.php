@extends('layouts.administrator')

@section('head')
<title>Exam Batches Manager</title>
@endsection

@section('content')
<admin-exam-result-manager-exam-batch examination_id="{{$id}}" :batches="{{$batches}}"></admin-exam-result-manager-exam-batch>
@endsection