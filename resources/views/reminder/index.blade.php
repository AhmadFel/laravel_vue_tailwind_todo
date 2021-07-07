
@extends('layout')
@section('content')
<a href="/reminder/create" class="py-2 px-5 mb-3 rounded  bg-gray-100 text-gray-800">New Note</a>
<table class="w-full">
    <tr>
        <th>
            ID
        </th>
        <th>
            Title
        </th>
        <th>
            Date
        </th>
        <th>
            Time
        </th>
        <th>
            Important
        </th>

    </tr>
    @foreach($reminders as $reminder)

    <tr>
        <td class="text-center">
            {{$reminder->id}}
        </td>
        <td class="text-center">
            {{ $reminder->title }}
        </td>
        <td class="text-center">
            {{ $reminder->date }}
        </td>
        <td class="text-center">
            {{ $reminder->time }}
        </td>
        <td class="text-center">
            {{ $reminder->important }}
        </td>
        <td>
            <div class="flex">
            <a class="p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" href="/reminder/{{ $reminder->id }}">Show</a>
            <a class="p-1 m-1 rounded border border-blue-500 bg-blue-100 text-blue-800" href="/reminder/{{ $reminder->id }}/edit">Edit</a>
            <form method="POST"action="reminder/{{ $reminder->id }}">
            @csrf
            @method('DELETE')
            <button class="p-1 m-1 rounded border border-red-500 bg-red-100 text-red-800" type="submit">Delete</button>
            </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>
@endsection