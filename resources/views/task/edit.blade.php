@extends('layout')
@section('content')
<form action="/task/{{ $task->id }}" method="POST">
    @csrf 
    @method('PUT')
    <div>
        <label for="title"Title>Title</label>
        <input type="text" value ="{{ $task->title }}"name="title" class="rounded border border-gray-500 mr-1">
    </div>
    <div>
        <label for="project_id">Project</label>
        <select  class="rounded border border-gray-500 mr-1" name="project_id">
            @foreach($projects as $project)
            <option {{ $task->project_id==$project->id?'selected':'' }}
                value="{{ $project->id }}">
            {{ $project->title }}
        </option>
        @endforeach
        </select>
    </div>
    <div>
        <label for="status">Status</label>
        <select  class="rounded border border-gray-500 mr-1" name="status">
            <option {{ $task->status=='0'?'selected':'' }}value="0">Not Yet</option>
            <option {{ $task->status=='1'?'selected':'' }}value="1">Done</option>
        </select>
    </div>
    <button type="submit" class="p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800">Save</button>
</form>
@endsection