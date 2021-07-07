@extends('layout')
@section('content')
<form action="/reminder" method="POST">
     @csrf 
     <div>
        <label for="title">Title : </label>
        <input type="text" name="title" class="rounded border border-gray-300 mr-1">
     </div>
     <div>
        <label for="date">Date : </label>
        <input type="date" name="date" class="rounded border border-gray-300 mr-1">
     </div>
     <div>
        <label for="time">Time : </label>
        <input type="time" name="time" class="rounded border border-gray-300 mr-1">
     </div>
     <div>
        <label for="important">Reminder Important:</label>
        <select name="important" id="important" class="rounded border border-gray-300 mr-1">
                <option value="true">ture</option>
                <option value="false">false</option>
        </select>
     </div>
     <button  class="p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800"type="submit">Save</button>
</form>
@endsection