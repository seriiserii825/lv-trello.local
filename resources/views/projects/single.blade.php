@extends('layouts.front-layout')
@section('content')
    <div class="single-project" style="background: {{ $project->color }}">
        <div class="container">
            <h2 class="single-project__title">{{ $project->title }}</h2>
            @if(count($cards))
                <table class="project-table">
                    <thead>
                    <th>Wait to do</th>
                    <th>To do</th>
                    <th>In progress</th>
                    <th>Done</th>
                    <th>Tested</th>
                    </thead>
                    <tbody>
                    @foreach($cards as $card)
                        <tr>
                            <td>
                                @if($card->column_id === 1)
                                    <div class="card">
                                        <h3>{{ $card->title }}</h3>
                                        <p>{{ $card->created_at }}</p>
                                        <form action="{{ route('cards.update', ['card' => $card->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <select name="column_id" id="column_id">
                                                    @foreach($columns as $column)
                                                        <option @if($column->id === $card->column_id) selected
                                                                @endif value="{{ $column->id }}">{{ $column->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="submit" class="btn" value="Update">
                                        </form>
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if($card->column_id === 2)
                                    <div class="card">
                                        <h3>{{ $card->title }}</h3>
                                        <p>{{ $card->created_at }}</p>
                                        <form action="{{ route('cards.update', ['card' => $card->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <select name="column_id" id="column_id">
                                                    @foreach($columns as $column)
                                                        <option @if($column->id === $card->column_id) selected
                                                                @endif value="{{ $column->id }}">{{ $column->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="submit" class="btn" value="Update">
                                        </form>
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if($card->column_id === 3)
                                    <div class="card">
                                        <h3>{{ $card->title }}</h3>
                                        <p>{{ $card->created_at }}</p>
                                        <form action="{{ route('cards.update', ['card' => $card->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <select name="column_id" id="column_id">
                                                    @foreach($columns as $column)
                                                        <option @if($column->id === $card->column_id) selected
                                                                @endif value="{{ $column->id }}">{{ $column->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="submit" class="btn" value="Update">
                                        </form>
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if($card->column_id === 4)
                                    <div class="card">
                                        <h3>{{ $card->title }}</h3>
                                        <p>{{ $card->created_at }}</p>
                                        <form action="{{ route('cards.update', ['card' => $card->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <select name="column_id" id="column_id">
                                                    @foreach($columns as $column)
                                                        <option @if($column->id === $card->column_id) selected
                                                                @endif value="{{ $column->id }}">{{ $column->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="submit" class="btn" value="Update">
                                        </form>
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if($card->column_id === 5)
                                    <div class="card">
                                        <h3>{{ $card->title }}</h3>
                                        <p>{{ $card->created_at }}</p>
                                        <form action="{{ route('cards.update', ['card' => $card->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <select name="column_id" id="column_id">
                                                    @foreach($columns as $column)
                                                        <option @if($column->id === $card->column_id) selected
                                                                @endif value="{{ $column->id }}">{{ $column->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="submit" class="btn" value="Update">
                                        </form>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h2>No cards</h2>
            @endif
        </div>
    </div>
@endsection
