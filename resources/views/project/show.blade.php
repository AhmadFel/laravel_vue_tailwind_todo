@extends('layout')
@section('content')
<div><span>Project Name:  </span><span class="text-xl">{{ $project->title }}</span></div>
<div class="mb-5"><span>Project Number </span><span class="text-lg"> #{{ $project->id }}</span></div>
<a href="/project" class="py-2 px-5 mb-3 rounded bg-gray-100 text-gray-800">Back To Main Project List</a>
@endsection