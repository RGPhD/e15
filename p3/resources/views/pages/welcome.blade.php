@extends('layouts.master')

@section('head')
<link href='/css/pages/welcome.css' rel='stylesheet'>
@endsection

@section('content')
<p> Welcome to Coronavirus Resources, an online website depository that let’s you lookup, add, view and review Coronavirus Health and or Financial related websites.</p>

<h2>Select category of websites (Health or Financial) or view them all!</h2>
<h4>Selection Form Below</h4>
<ul>
    <li><a href='/websites'>Select All Cornovirus Websites</a></li>
    <li><a href='/websites/health-related'>Select Health Related Webites</a></li>
    <li><a href='/websites/financial-related'>Select Financial Related Webites</a></li>
</ul>

@endsection