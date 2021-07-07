@extends('layout')
@section('content')
<a href="/note/create" class="py-2 px-5 mb-3 rounded  bg-gray-100 text-gray-800">New Note</a>
<table class="w-full">
    <tr>
        <th>
            ID
        </th>
        <th>
            Content
        </th>

    </tr>
    @foreach($notes as $note)

    <tr>
        <td class="text-center">
            {{$note->id}}
        </td>
        <td class=" text-center">
            {{ $note->content }}
        </td>
        <td>
            <div class="flex">
            <a  class="p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" href="/note/{{ $note->id }}">Show</a>
            <a  class="p-1 m-1 rounded border border-blue-500 bg-blue-100 text-blue-800" href="/note/{{ $note->id }}/edit">Edit</a>
            <form method="POST"action="note/{{ $note->id }}">
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