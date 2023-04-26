@extends('layouts.administrator')

@section('head')
<title>Exam Batches Manager</title>
@endsection

@section('content')
<admin-exam-result-manager-exam-student examination_id="{{$id}}"></admin-exam-result-manager-exam-student>
@endsection