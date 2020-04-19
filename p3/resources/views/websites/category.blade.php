@extends('layouts.master')

@section('title')
    Websites Categories
@endsection

@section('head')
    <link href='/css/websites/index.css' rel='stylesheet'>
@endsection

@section('content')

    <h2>Websites by Category</h2>
    @if(count($websites) == 0) 
        No websites have been added yet...
    @else
    <div id='websites'>
        @foreach($websites as $website)
            <h3>Website Category: {{ $website->category }}</h3>
           Website Name and Info: <a class='websites' href='/websites/{{ $website->slug }}'>
            <h4>{{ $website->name }}</h4> 
        </a>
        <p>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>

        @endforeach
    </div>
    @endif

@endsection