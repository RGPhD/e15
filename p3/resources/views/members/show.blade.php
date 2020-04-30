@extends('layouts.master')

@section('head')

@endsection

@section('title')
Member Websites and Reviews
@endsection

@section('content')
<h2>My Favorite Websites and Reviews (Members Only)</h2>

@if($websites->count() == 0)
    <p>You have not added any websites or reviews yet.</p>
    <p><a href='/websites'>Find websites to add and review!</a></p>
@else

    @foreach($websites as $website)
        <div class='website'>
            <a href='/websites/{{ $website->slug }}'><h3>{{ $website->name }}</h3></a>
            @if($website->review)
                <p>Coronavirus Websites' Official Latest Review... "{{ $website->review }}"</p>
            @endif

            <p class='my_review'> <!--might not use this CSS-->
            <p>My Review...  <em>"{{ $website->pivot->my_review }}"</em>
            
                Added... {{ $website->pivot->created_at->diffForHumans() }}
            </p></em>
        </div>
    @endforeach

@endif
<hr>
<h2>Select category of websites (Health and or Financial) or view them all!</h2>
<h4>Select the Websites You Want To View or Review Below</h4>
<ul>
    <li><a href='/websites'>View All of our Recommended Cornovirus Websites</a></li>
    <li><a href='/websites/category'>View Websites by Category (Health and or Financial)</a></li>
</ul>

@endsection