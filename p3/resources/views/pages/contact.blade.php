@extends('layouts.master')

@section('title')
    Contact Us
@endsection

@section('head')
   <link href='/css/pages/contact.css' rel='stylesheet'>
@endsection

@section('content')
<h2>Contact Us</h2>
<form>
        <fieldset>
          <legend>Contact Coronavirus Websites</legend>
          <label for="name">Your Name </label>
          <input type="text" id="name" placeholder="Enter your name." autofocus>

          <label for="email">Your Email</label>
          <input type="email" id="email" placeholder="Enter your email.">

          <label>
            Leave Your Message Below
            <textarea id="comments" name='comments' value='comments' placeholder="Enter your comments."></textarea>
          </label>
          <button type="submit" class='btn btn-primary' title="Click here to submit.">Click to Submit</button>
        </fieldset>
     </form>

<!-- I could config email instead of making it clickable {{ config('mail.contactEmail') }}-->
<h4>Or Email us directly at: <a href="mailto:CoronavirusWebsites@gmail.com" target="_blank" >CoronavirusWebsites@gmail.com</a></h4>

<p>Share our Tinyurl: <a href='http://tinyurl.com/coronaviruswebsites' target='_blank'>http://tinyurl.com/coronaviruswebsites</p>
@endsection