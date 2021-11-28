@extends('layouts.user-layout')
@section('content')
    <h2 class="user-layout__title">Login</h2>
    <form class="form" action="{{ route('user.login') }}" method="post">
        @csrf
        <div class="form-group">
            <input class="@error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}"
                placeholder="Email">
        </div>
        <div class="form-group">
            <input class="@error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
        </div>
        <p class="info">Don't have an account, <a href="{{ route('user.create') }}">Register</a></p>
        <button class="btn" type="submit">Submit</button>
    </form>
@endsection
