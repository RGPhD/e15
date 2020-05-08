@extends('layouts.master')

@section('title')
    All Users
@endsection

@section('head')
   <link href='/css/pages/community.css' rel='stylesheet'>
@endsection

@section('content')

    <h2>Our Coronavirus Websites Online Community Members</h2>
    @if(count($users) == 0) 
        No Users have been added yet...
    @else
    <div id='users'>
        @foreach($users as $user)
            <h3 class='username'>Member Name: {{ $user->name }}</h3>
            <p class='useremail'>Member email: {{ $user->email }}</p>
        </a>
       <p>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>
        @endforeach
    <h2>Thank you for Joining our Online Community</h2>   
    </div>
    @endif

@endsection