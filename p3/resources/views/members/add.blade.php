@extends('layouts.master')

@section('title')
Add Website to Review!
@endsection

@section('content')
<h2>Add The {{ $website->name }} Website to Review</h2>

<form method='POST' action='/members/{{ $website->slug }}/add'>
        <div class='details'>* Required fields</div>
        {{ csrf_field() }}

        <label for='my_review'>YOUR Review of THIS Website</label>
        <textarea name='my_review'>{{ old('my_review') }}</textarea>

        <input type='submit' class='btn btn-primary' value='Save'>
    </form>
@endsection