{{-- /resources/views/websites/edit.blade.php --}}
@extends('layouts.master')

@section('title')
Review - {{ $website->name }}
@endsection

@section('content')

    <h2>Review This Website</h2>
    <h3>{{ $website->name }}</h3>
    <p>Visit Website: <a href='{{ $website->website_url }}' target='_blank'>{{ $website->website_url }}</a></p>

    <form method='POST' action='/websites/{{ $website->slug }}'>

    {{ method_field('put') }}

    {{ csrf_field() }}

        <div class='form-group'>
            <label for='review'>Review of Website</label>
            <textarea name='review' value='review' id='review' class='form-control' placeholder='Enter Your Website Review Here'></textarea>
        </div>

        <button type='submit' class='btn btn-primary' value='Update'>Submit Your Website Review</button>
    </form>

@endsection