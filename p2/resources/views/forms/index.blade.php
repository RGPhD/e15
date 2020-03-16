@extends('layouts.master')

@section('title')
    WTH Form
@endsection

@section('content')

@if($WaistToHip)
<h2>{{ "RESULTS:" }}</h2>
@endif

@if($gender == 'Female' && $WaistToHip <= .85)
<ul>
<li>{{ "Congrats, you are in the Normal Range!" }}</li>

@elseif ($gender == 'Female' && $WaistToHip >= .86)
  
<li>{{ "You are in the At Risk Range." }}</li>
</ul>
@endif

@if($gender == 'Male' && $WaistToHip <= .99)
<ul>
<li>{{ "Congrats, you are in the Normal Range!" }}</li>

@elseif ($gender == 'Male' && $WaistToHip >= 1.0)

<li>{{ "You are in the At Risk Range." }}</li>
</ul>
@endif

<h3>Calculate Again by refreshing The P2 App - Beyond BMI Page by Clicking the Button Below.</h3>

<div>
      <button class='refresh'><a class='refresh' title="Calculate Again" href="http://e15p2.robelyngarcia.me">Click to Refresh Page and Process New Data</a></button>
    </div>
@endsection