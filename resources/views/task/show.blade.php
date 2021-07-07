@extends('layout')
@section('content')
<h1>Project Name : {{ $task->project->title }}</h1>
<h2>Task Name :{{ $task->title }}</h2>
<p>Task Number #{{ $task->id }}</p>
<p class="mb-5">Task Status {{ $task->status?'Done':'Not Yet' }}</p>
<a href="/task" class="py-2 px-5 mb-3 rounded bg-gray-100 text-gray-800">Back To Main Task List</a>
@endsection