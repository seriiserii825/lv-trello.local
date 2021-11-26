@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Edit project</h2>
    <form action="{{ route('projects.update', ['project' => $project->id]) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $project->title }}" placeholder="Title">
        <button type="submit" class="btn">Edit</button>
    </form>
@endsection
