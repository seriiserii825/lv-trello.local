@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Create card</h2>
    <form class="form" action="{{ route('cards.store') }}" method="post">
        @csrf
        <div class="form-group">
            <input id="title" type="text" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <input id="slug" type="text" name="slug" placeholder="Slug">
        </div>
        @if(count($projects))
            <div class="form-group">
                <select name="project_id" id="project_id">
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->title }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        @if(count($columns))
            <div class="form-group">
                <select name="column_id" id="column_id">
                    @foreach($columns as $column)
                        <option value="{{ $column->id }}">{{ $column->title }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        @if(count($users))
            <div class="form-group">
                <select name="user_id" id="user_id">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        <button type="submit" class="btn">Create</button>
    </form>
@endsection
