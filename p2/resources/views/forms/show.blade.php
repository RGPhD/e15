@extends('layouts.master')

@section('title')
{{ $title }}
@endsection

@section('content')
<h2>{{ $title }}</h2>

<p>
    Details about the user WTH Ratio form data will go here… 
</p>
   <div>
      <button class='refresh'><a class='refresh' title="Return to Home" href="http://e15p2.robelyngarcia.me">Click to Return to Home Page</a></button>
    </div>
@endsection