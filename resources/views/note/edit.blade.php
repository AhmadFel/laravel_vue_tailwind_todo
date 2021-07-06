@extends('layout')
@section('content')
<form action="/note/{{ $note->id }}" method="POST">
    @csrf 
    @method('PUT')
    <div>
        <label for="content">Write Your Content</label>
        <textarea value ="{{ $note->content }}"name="content"></textarea>
    </div>
    <button type="submit">Save</button>
</form>
@endsection