@extends('layout')
@section('content')
<form action="/note/{{ $note->id }}" method="POST">
    @csrf 
    @method('PUT')
    <div>
        <label for="content">Write Your Content</label>
        <textarea class="rounded border border-gray-500 mr-1" value ="{{ $note->content }}"name="content"></textarea>
    </div>
    <button class="p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" type="submit">Save</button>
</form>
@endsection