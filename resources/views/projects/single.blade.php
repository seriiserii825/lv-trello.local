@extends('layouts.front-layout')
@section('content')
    <div class="single-project" style="background: {{ $project->color }}">
        <div class="container">
            <h2 class="single-project__title">{{ $project->title }}</h2>
            @if (count($cards))
                <div class="project-table">
                    <div class="project-table__column">
                        <h3 class="project-table__title">Wait to do</h3>
                        @foreach ($cards as $card)
                            @if ($card->column_id === 1)
                                <div class="project-table__row">
                                    <div class="card">
                                        <h2>{{ $card->title }}</h2>
                                        <form action="{{ route('cards.update', ['card' => $card->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <select name="column_id" id="column_id">
                                                    @foreach ($columns as $column)
                                                        <option @if ($column->id === $card->column_id) selected
                                                            @endif value="{{ $column->id }}">{{ $column->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="submit" class="btn" value="Update">
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="project-table__column">
                        <h3 class="project-table__title">To do</h3>
                        @foreach ($cards as $card)
                            @if ($card->column_id === 2)
                                <div class="project-table__row">
                                    <div class="card">
                                        <h2>{{ $card->title }}</h2>
                                        <form action="{{ route('cards.update', ['card' => $card->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <select name="column_id" id="column_id">
                                                    @foreach ($columns as $column)
                                                        <option @if ($column->id === $card->column_id) selected
                                                            @endif value="{{ $column->id }}">{{ $column->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="submit" class="btn" value="Update">
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="project-table__column">
                        <h3 class="project-table__title">In progress</h3>
                        @foreach ($cards as $card)
                            @if ($card->column_id === 3)
                                <div class="project-table__row">
                                    <div class="card">
                                        <h2>{{ $card->title }}</h2>
                                        <form action="{{ route('cards.update', ['card' => $card->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <select name="column_id" id="column_id">
                                                    @foreach ($columns as $column)
                                                        <option @if ($column->id === $card->column_id) selected
                                                            @endif value="{{ $column->id }}">{{ $column->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="submit" class="btn" value="Update">
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="project-table__column">
                        <h3 class="project-table__title">Done</h3>
                        @foreach ($cards as $card)
                            @if ($card->column_id === 4)
                                <div class="project-table__row">
                                    <div class="card">
                                        <h2>{{ $card->title }}</h2>
                                        <form action="{{ route('cards.update', ['card' => $card->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <select name="column_id" id="column_id">
                                                    @foreach ($columns as $column)
                                                        <option @if ($column->id === $card->column_id) selected
                                                            @endif value="{{ $column->id }}">{{ $column->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="submit" class="btn" value="Update">
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="project-table__column">
                        <h3 class="project-table__title">Test</h3>
                        @foreach ($cards as $card)
                            @if ($card->column_id === 5)
                                <div class="project-table__row">
                                    <div class="card">
                                        <h2>{{ $card->title }}</h2>
                                        <form action="{{ route('cards.update', ['card' => $card->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <select name="column_id" id="column_id">
                                                    @foreach ($columns as $column)
                                                        <option @if ($column->id === $card->column_id) selected
                                                            @endif value="{{ $column->id }}">{{ $column->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="submit" class="btn" value="Update">
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @else
                <h2>No cards</h2>
            @endif
        </div>
    </div>
@endsection
