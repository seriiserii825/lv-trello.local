@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Edit project</h2>
    <form class="form" action="{{ route('projects.update', ['project' => $project->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input id="title" type="text" name="title" value="{{ $project->title }}" placeholder="Title">
        </div>
        <div class="form-group">
            <input id="slug" type="text" name="slug" value="{{ $project->slug }}" placeholder="Slug">
        </div>
        <div class="form-group">
            <input id="user_id" type="text" name="user_id" value="{{ $project->user_id }}" placeholder="Slug">
        </div>
        <div class="form-group form-group--flex">
            <input id="js-color" type="text" name="color" value="{{ $project->color }}" placeholder="Color">
            <div class="color-picker"></div>
        </div>
        <button type="submit" class="btn">Edit</button>
    </form>
@endsection
