@extends('layouts.master')

@section('title')
    All Websites
@endsection

@section('content')

    <h2>All of Our Recommended Websites</h2>
    @if(count($websites) == 0) 
        No websites have been added yet...
    @else
    <div id='websites'>
        @foreach($websites as $website)
        <a class='websites' href='/websites/{{ $website->slug }}'>
            <h3>{{ $website->name }}</h3>
            <img class='slugimage' src='{{ $website->website_image }}' alt='Image for {{ $website->name }}'></a>
        @endforeach
    </div>
    @endif

@endsection