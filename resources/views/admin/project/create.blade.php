@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Create project</h2>
    <form class="form" action="{{ route('projects.store') }}" method="post">
        @csrf
        <div class="form-group">
            <input id="title" type="text" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <input id="slug" type="text" name="slug" placeholder="Slug">
        </div>
        <div class="form-group form-group--flex">
            <input id="js-color" type="text" value="#000" name="color" placeholder="Color">
            <div class="color-picker"></div>
        </div>
        <button type="submit" class="btn">Create</button>
    </form>
@endsection
