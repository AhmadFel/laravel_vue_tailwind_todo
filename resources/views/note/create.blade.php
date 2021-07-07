@extends('layout')
@section('content')
<form action="/note" method="POST">
     @csrf 
     <div>
         <label for="content">Write Your Content</label>
         <textarea name="content" class="rounded border border-gray-100 mr-1"></textarea>
     </div>
     <button  class="p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" type="submit">Save</button>
</form>
@endsection