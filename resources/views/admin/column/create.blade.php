@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Create project</h2>
    <form class="form" action="{{ route('columns.store') }}" method="post">
        @csrf
        <div class="form-group">
            <input id="title" type="text" name="title" placeholder="Title">
        </div>
        <button type="submit" class="btn">Create</button>
    </form>
@endsection
