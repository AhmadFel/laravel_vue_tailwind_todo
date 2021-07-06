@extends('layout')
@section('content')

<a href="/project/create" class="py-2 px-5 mb-3 rounded  bg-gray-100 text-gray-800">New Project</a>
<table class="w-full">
    <tr>
        <th>
            ID
        </th>
        <th>
            Title
        </th>
        <th>
            Actions
        </th>
    </tr>
    @foreach($projects as $project)

    <tr>
        <td>
            {{$project->id}}
        </td>
        <td class="w-4/5 text-center">
            {{ $project->title }}
        </td>
        <td>
            <div class="flex ">
                <a class="p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800"href="/project/{{ $project->id }}">Show</a>
            <a class="p-1 m-1 rounded border border-blue-500 bg-blue-100 text-blue-800" href="/project/{{ $project->id }}/edit">Edit</a>
            <form method="POST"action="project/{{ $project->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="p-1 m-1 rounded border border-red-500 bg-red-100 text-red-800">Delete</button>
            </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>
@endsection