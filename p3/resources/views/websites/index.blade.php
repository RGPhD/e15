@extends('layouts.master')

@section('title')
    All Websites
@endsection

@section('head')
    <link href='/css/websites/index.css' rel='stylesheet'>
@endsection

@section('content')

    <h1>All Websites</h1>
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