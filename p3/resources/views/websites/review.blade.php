@extends('layouts.master')

@section('title')
    Review Websites
@endsection

@section('head')
    <link href='/css/websites/websites.css' rel='stylesheet'>
@endsection

@section('content')

    <h2>Review Our Recommended Websites</h2>
    <h4>Select the website you wish to review below!</h4>
    @if(count($websites) == 0) 
        No websites have been added yet...
    @else
    <div id='websites'>
        @foreach($websites as $website)
        <a class='websites' href='/websites/{{ $website->slug }}'>
            <h3>{{ $website->name }}</h3>
            <img class='image' src='{{ $website->website_image }}'></a>
        </a>
        @endforeach
    </div>
    @endif

@endsection