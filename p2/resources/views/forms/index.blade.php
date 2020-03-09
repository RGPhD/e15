@extends('layouts.master')

@section('title')
    Form library information ...
@endsection

@section('content')
    @if(count($forms) == 0) 
        No forms have been added yet...
    @else 
        @foreach($forms as $form)
            {{ $form['title'] }}
        @endforeach
    @endif
@endsection