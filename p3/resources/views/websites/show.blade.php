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
<img id='image' src='{{ $website->website_image }}' alt='Image for {{ $website->name }}'>
<p></p>
    <p>Website organization: {{ $website->organization }}</p>
    <p>Website category: {{ $website->category }}</p>
    <p>Website summary: {{ $website->summary }}</p>
    <p>Visit Website: <a href='{{ $website->website_url }}' target='_blank'>{{ $website->website_url }}</a></p>

<h2>Website Reviews</h2>

    <p>Coronavirus Websites' Official Latest Review: "{{ $website->review }}"  </p>

<p><a href='/members/{{ $website->slug }}/add' class="edit"> -->Add this Website to your Favorites and save your Review {{ $userName }}--></a></p>
<p><a href='/websites/{{ $website->slug }}/edit' class="edit"> -->Review this Website Anonymously {{ $userName }}--></a></p>
<p><a href='/members' class="edit"> -->See Your Website Favorites and saved Reviews {{ $userName }}--></a></p>
@endif

@endsection