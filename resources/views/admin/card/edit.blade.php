@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Edit card</h2>
    <form class="form" action="{{ route('cards.update', ['card' => $card->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input id="title" type="text" name="title" placeholder="Title" value="{{ $card->title }}">
        </div>
        <div class="form-group">
            <input id="slug" type="text" name="slug" placeholder="Slug" value="{{ $card->slug }}">
        </div>
        @if(count($projects))
            <div class="form-group">
                <select name="project_id" id="project_id">
                    @foreach($projects as $project)
                        <option @if($project->id === $card->project_id) selected @endif value="{{ $project->id }}">{{ $project->title }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        @if(count($columns))
            <div class="form-group">
                <select name="column_id" id="column_id">
                    @foreach($columns as $column)
                        <option @if($column->id === $card->column_id) selected @endif value="{{ $column->id }}">{{ $column->title }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        @if(count($users))
            <div class="form-group">
                <select name="user_id" id="user_id">
                    @foreach($users as $user)
                        <option @if($user->id === $card->user_id) selected @endif value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        <button type="submit" class="btn">Edit</button>
    </form>
@endsection
