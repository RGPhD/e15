@extends('layouts.master')

@section('title')
    Websites Categories
@endsection

@section('head')
    <link href='/css/websites/index.css' rel='stylesheet'>
@endsection

@section('content')

    <h2>Website Category</h2>
    dump($categories)

@endsection