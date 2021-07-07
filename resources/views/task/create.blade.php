@extends('layout')
@section('content')
<form action="/task" method="POST">
    @csrf 
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" class="rounded border border-gray-300 mr-1">
    </div>
    <div>
        <label for="project_id">Project Name</label>
        <select  class="rounded border border-gray-300 mr-1" name="project_id" >
            @foreach ($projects as $project)
            <option value="{{ $project->id }}">
            {{ $project->title }}
            </option>
            @endforeach
        </select>
    </div>
    <button class="p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" type="submit">Save</button>
</form>
@endsection