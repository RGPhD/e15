@extends('layouts.master')

@section('content')
    <h2>Register to Become a Member of our Online Community</h2>

    Already have an account? <a href='/login'> Members Login Here!</a>

    <form method='POST' action='{{ route('register') }}'>
        {{ csrf_field() }}

        <label for='name'>Name</label>
        <input id='name' type='text' dusk='name-input' name='name' value='{{ old('name') }}' required autofocus>
        @include('includes.error-field', ['fieldName' => 'name'])

        <label for='email'>E-Mail Address</label>
        <input id='email' type='email' name='email' value='{{ old('email') }}' required>
        @include('includes.error-field', ['fieldName' => 'email'])

        <label for='password'>Password (min: 8)</label>
        <input id='password' type='password' name='password' required>
        @include('includes.error-field', ['fieldName' => 'password'])

        <label for='password-confirm'>Confirm Password</label>
        <input id='password-confirm' type='password' name='password_confirmation' required>

        <button type='submit' dusk='register-button' class='btn btn-primary'>Register</button>
    </form>
@endsection