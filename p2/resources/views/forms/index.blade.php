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

<!-- Solid bullets and additional spacing for at risk range to highlight more than normal range. -->
@if($WaistToHip)
<ul>
<li>Learn more about abdominal obesity at <a href="https://www.health.harvard.edu/staying-healthy/abdominal-obesity-and-your-health" target="_blank" title="Click to visit Harvard Health"> Harvard Health</a> or learn more about <a href="https://en.wikipedia.org/wiki/Waist%E2%80%93hip_ratio" target="_blank" title="Waist to Hip info.">Waist to Hip Ratio Guidelines.</a></li>

<li>Calculate your BMI at <a href="https://jsfiddle.net/RobelynGarcia/0frLk781/show" target="_blank" title="Click to visit the JavaScript BMI Calculator">JavaScript BMI Calculaor</a> or view the <a href="https://scholar.harvard.edu/drrobelyngarcia/bmi" target="_blank" title="Click to visit Adult BMI Categories Chart at Harvard Scholar">Harvard Scholar Adult BMI Categories Chart.</a></li>
</ul>
@endif

<h3>Refresh The P2 App - Beyond BMI Page by Clicking the Button Below.</h3>

<div>
      <button class='refresh'><a class='refresh' title="Calculate Again" href="http://e15p2.robelyngarcia.me">Click to Refresh Page and Process New Data</a></button>
    </div>
@endsection