@extends('layouts.user-layout')
@section('content')
    <h2 class="user-layout__title">Registration</h2>
    <form class="form" action="{{ route('user.store') }}" method="post">
        @csrf
        <input class="@error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}"
            placeholder="Name">
        <input class="@error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}"
            placeholder="Email">
        <input class="@error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
        <input type="password" name="password_confirmed" placeholder="Confirm password">
        <p class="info">Have an account, <a href="{{ route('user.login') }}">Login</a></p>
        <button class="btn" type="submit">Submit</button>
    </form>
@endsection
