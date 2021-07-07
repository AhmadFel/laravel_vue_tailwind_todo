@extends('layout')
@section('content')
<h1>Note Number : {{ $note->id }}</h1>
<p class="mb-5">Note Content : {{ $note->content }}</p>
<a class="py-2 px-5 mb-3 rounded bg-gray-100 text-gray-800" href="/note">Back</a>
@endsection