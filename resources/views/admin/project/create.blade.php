@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Create project</h2>
    <form action="{{ route('projects.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <button type="submit" class="btn">Create</button>
    </form>
@endsection
