@extends('layouts.master')

@section('title')
    WTH Form
@endsection

@section('content')
@if($gender == 'Female' && $WaistToHip <= .85)

  {{ "You are in the Normal Range." }}

@elseif ($gender == 'Female' && $WaistToHip >= .86)
  
  {{ "You are in the At Risk Range." }}

@endif

@if($gender == 'Male' && $WaistToHip <= .99)

    {{ "You are in the Normal Range." }}

@elseif ($gender == 'Male' && $WaistToHip >= 1.0)

    {{ "You are in the At Risk Range." }}

@endif

@endsection