@extends('layouts.master')

@section('head')
<link href='/css/pages/welcome.css' rel='stylesheet'>
@endsection

@section('content')
<p> Welcome to Coronavirus Resources, an online website depository that will allow you to lookup, view and review Coronavirus Health and or Financial related websites.</p>

<h2>Select category of websites (Health and or Financial) or view them all!</h2>
<h4>Select the Websites You Want To View Below</h4>
<ul>
    <li><a href='/websites'>Select All Cornovirus Websites</a></li>
    <li><a href='/websites/category'>Select Websites by Category (Health and or Financial)</a></li>
    <!--<li><a href='/websites/financial'>Select Financial Related Webites</a></li>-->
</ul>

@endsection