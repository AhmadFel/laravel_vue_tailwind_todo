@extends('layout')
@section('content')
<form action="/reminder/{{ $reminder->id }}" method="POST">
    @csrf 
    @method('PUT')
    <div>
            <label for="title">Title</label>
            <input type="text" value ="{{ $reminder->title }}"name="title" class="rounded border border-gray-500 mr-1">    
    </div>
    <div>
        <label for="date">Date</label>
        <input type="date" value ="{{ $reminder->date }}"name="date" class="rounded border border-gray-500 mr-1">    
</div>
<div>
    <label for="time">Time</label>
    <input type="time" value ="{{ $reminder->time }}"name="time" class="rounded border border-gray-500 mr-1">    
</div>
<!--<label for="important">Imprtant</label>
<select name="important" id="important">
    <option value="true">True</option>
    <option value="false">False</option>
</select>-->
<div>
<label for="important">Imprtant</label>
<select name="important" class="rounded border border-gray-500 mr-1">
    <option {{ $reminder->important=='false'?'selected':'' }}value="false">False</option>
    <option {{ $reminder->important=='true'?'selected':'' }}value="true">True</option>
</select>
</div>
    <button  class="p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" type="submit">Save</button>
</form>
@endsection