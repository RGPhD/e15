@extends('layouts.master')

@section('title')
Add Website to Review!
@endsection

@section('head')
   <link href='/css/pages/contact.css' rel='stylesheet'>
@endsection

@section('content')
<h2>Add The {{ $website->name }} Website to your Favorites</h2>

<form method='POST' action='/members/{{ $website->slug }}/add'>
        <div class='details'>**Required**</div>
        {{ csrf_field() }}

        <label for='my_review'>Enter YOUR Review of THIS Website below:</label>
        <textarea name='my_review' placeholder='Enter your webiste review here'>{{ old('my_review') }}</textarea>

        <input type='submit' class='btn btn-primary' value='Save'>
    </form>
@endsection