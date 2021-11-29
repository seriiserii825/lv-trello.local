@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Edit card</h2>
    <form class="form" action="{{ route('cards.update', ['card' => $card->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input id="title" type="text" name="title" value="{{ $card->title }}" placeholder="Title">
        </div>
        <div class="form-group">
            <input id="slug" type="text" name="slug" value="{{ $card->slug }}" placeholder="Slug">
        </div>
        @if(count($projects))
            <div class="form-group">
                <input id="project_id" type="text" name="project_id">
                <select name="project_id" id="project_id">
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->title }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        <button type="submit" class="btn">Edit</button>
    </form>
@endsection
