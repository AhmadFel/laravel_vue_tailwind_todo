@extends('layout')
@section('content')
<h1>Reminder ID : {{ $reminder->id }}</h1>
<p>Reminder Title : {{ $reminder->title }}</p>
<p>Reminder Date : {{ $reminder->date }}</p>
<p>Reminder Time : {{ $reminder->time }}</p>
<p class="mb-5">Reminder Important : {{ $reminder->important }}</p>
<a class="py-2 px-5 mb-3 rounded bg-gray-100 text-gray-800" href="/reminder">Back</a>
@endsection