@extends('layout')
@section('content')
<form action="/reminder/{{ $reminder->id }}" method="POST">
    @csrf 
    @method('PUT')
    <div>
            <label for="title">Title</label>
            <input type="text" value ="{{ $reminder->title }}"name="title">    
    </div>
    <div>
        <label for="date">Date</label>
        <input type="date" value ="{{ $reminder->date }}"name="date">    
</div>
<div>
    <label for="time">Time</label>
    <input type="time" value ="{{ $reminder->time }}"name="time">    
</div>
<!--<label for="important">Imprtant</label>
<select name="important" id="important">
    <option value="true">True</option>
    <option value="false">False</option>
</select>-->
<label for="important">Imprtant</label>
<select name="important">
    <option {{ $reminder->important=='false'?'selected':'' }}value="false">False</option>
    <option {{ $reminder->important=='true'?'selected':'' }}value="true">True</option>
</select>
    <button type="submit">Save</button>
</form>
@endsection