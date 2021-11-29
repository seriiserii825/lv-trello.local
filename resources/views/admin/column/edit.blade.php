@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Edit column</h2>
    <form class="form" action="{{ route('columns.update', ['column' => $column->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input id="title" type="text" name="title" value="{{ $column->title }}" placeholder="Title">
        </div>
        <button type="submit" class="btn">Edit</button>
    </form>
@endsection
