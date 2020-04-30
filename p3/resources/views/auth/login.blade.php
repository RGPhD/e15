@extends('layouts.master')

@section('content')

    <h2>Member Login</h2>

    Don’t have an account? <a href='/register'> Register Here to become a Member to save your favorite Websites, Review your favorite Website or Review a website Anonymously!</a>

    <form method='POST' action='{{ route('login') }}'>

        {{ csrf_field() }}

        <label for='email'>E-Mail Address</label>
        <input id='email' type='email' name='email' value='{{ old('email') }}' required autofocus>
        @include('includes.error-field', ['fieldName' => 'email'])

        <label for='password'>Password</label>
        <input id='password' type='password' name='password' required>
        @include('includes.error-field', ['fieldName' => 'password'])

        <label>
            <input type='checkbox' name='remember' {{ old('remember') ? 'checked' : '' }}> Remember Me
        </label>

        <button type='submit' class='btn btn-primary'>Login</button>

        <a class='btn btn-link' href='{{ route('password.request') }}'>Forgot Your Password?</a>

    </form>

@endsection