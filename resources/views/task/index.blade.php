@extends('layout')
@section('content')
<a href="/task/create"class="py-2 px-5 mb-3 rounded  bg-gray-100 text-gray-800">New Task</a>
<table class="w-full">
    <tr>
        <th>
            ID
        </th>
        <th>
            Project ID
        </th>
        <th>
            Project
        </th>
        <th>
            Task
        </th>
        <th>
            Status
        </th>

    </tr>
    @foreach($tasks as $task)

    <tr>
        <td class=" text-center">
            {{$task->id}}
        </td>
        <td class=" text-center">
            {{ $task->project_id }}
        </td>
        <td class=" text-center">
            {{ $task->project->title }}
        </td>
        <td class=" text-center">
            {{ $task->title }}
        </td>
        <td class=" text-center">
            {{ $task->status?'Done':'Not Yet' }}
        </td>
        <td class="flex">
            <a class="p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" href="/task/{{ $task->id }}">Show</a>
            <a  class="p-1 m-1 rounded border border-blue-500 bg-blue-100 text-blue-800"href="/task/{{ $task->id }}/edit">Edit</a>
            <form method="POST"action="task/{{ $task->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="p-1 m-1 rounded border border-red-500 bg-red-100 text-red-800">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection