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
                <p>Coronavirus Websites' Official Latest Review ... {{ $website->review }}</p>
            @endif

            <p class='my_review'> <!--might not use this CSS-->
            <p>My Review (If Available) ...  <em>{{ $website->pivot->my_review }}</em></p>
            
            <p>Review and or Website Added ... {{ $website->pivot->created_at->diffForHumans() }}
            </p>
        </div>
    @endforeach

@endif
<hr>
<h2>Connect with other Online Community Members!</h2>
<ul>
    <li><a href='/community'>View All of our Cornovirus Websites Members (Members Only)</a></li>
</ul>

@endsection