@extends('layouts.master')

@section('name')
{{ $website ? $website->name : '$website not found' }}
@endsection

@section('content')

@if(!$website) 
    Website not found. <a href='/websites'>Check out the other websites in our library...</a>
@else

<h2>Website Name: {{ $website->name }}</h2>
<img class='cover' src='{{ $website->website_image }}' alt='Cover photo for {{ $website->name }}'>
<p></p>
    <p>Website organization: {{ $website->organization }}</p>
    <p>Website category: {{ $website->category }}</p>
    <p>Website summary: {{ $website->summary }}</p>
    <p>Visit Website: <a href='{{ $website->website_url }}'>{{ $website->website_url }}</a></p>

<ul class='websiteActions'>
    <li><a href='/websites/{{ $website->slug }}/review'><i class="fa fa-edit"></i> Review This Website</a>
</ul>

@endif

@endsection