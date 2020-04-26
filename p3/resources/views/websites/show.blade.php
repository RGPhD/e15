@extends('layouts.master')

@section('title')
   {{ $website->name }}
@endsection

@section('name')
{{ $website ? $website->name : '$website not found' }}
@endsection

@section('content')

@if(!$website) 
    Website not found. <a href='/websites'>Check out the other websites in our database...</a>
@else

<h2>Website Name: {{ $website->name }}</h2>
<img id='image' src='{{ $website->website_image }}' alt='Cover photo for {{ $website->name }}'>
<p></p>
    <p>Website organization: {{ $website->organization }}</p>
    <p>Website category: {{ $website->category }}</p>
    <p>Website summary: {{ $website->summary }}</p>
    <p>Visit Website: <a href='{{ $website->website_url }}' target='_blank'>{{ $website->website_url }}</a></p>
    <p>Latest Website Review: "{{ $website->review }}"</p>

<p><a href='/websites/{{ $website->slug }}/edit' class="edit"> --> Review This Website</a></p>

@endif

@endsection