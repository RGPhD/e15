{{-- /resources/views/websites/review.blade.php --}}
@extends('layouts.master')

@section('title')
Review - {{ $website->name }}
@endsection

@section('content')

    <h2>Review This Website</h2>
    <h3>{{ $website->name }}</h3>
    <p>Visit Website: <a href='{{ $website->website_url }}'>{{ $website->website_url }}</a></p>

    <form method='POST' id='review'>

        <div class='form-group'>
            <label for='review'>Review of Website</label>
            <textarea name='review' id='review' class='form-control' placeholder='Enter Your Website Review'></textarea>
        </div>

        <button type='submit' class='btn btn-primary'>Submit Website Review</button>
    </form>
    
@endsection