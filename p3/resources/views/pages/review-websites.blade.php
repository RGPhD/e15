@extends('layouts.master')

@section('title')
    Review Websites
@endsection

@section('head')
    <link href='/css/websites/index.css' rel='stylesheet'>
@endsection

@section('content')

    <h2>Review our Recommended Websites</h2>
    <h3>Select the Website you want to review Below:</h3>
    @if(count($websites) == 0) 
        No websites have been added yet...
    @else
    <div id='websites'>
        @foreach($websites as $website)
        
        <a class='websites' href='/websites/{{ $website->slug }}'>
            <h3>{{ $website->name }}</h3>
        </a>
        <p>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>
        @endforeach
    </div>
    @endif     
    </div>

@endsection