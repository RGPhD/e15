@extends('layouts.master')

@section('title')
{{ $title }}
@endsection

@section('head')
{{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
<link href='/css/forms/show.css' rel='stylesheet'>
@endsection

@section('content')
<h1>{{ $title }}</h1>

<p>
    Details about this form will go here...
</p>
@endsection