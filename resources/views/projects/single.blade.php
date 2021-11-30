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
                                        <x-card-select></x-card-select>
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

                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="project-table__column">
                        <h3 class="project-table__title">Test</h3>
                        @foreach ($cards as $card)
                            @if ($card->column_id === 6)
                                <div class="project-table__row">
                                    <div class="card">
                                        <h2>{{ $card->title }}</h2>
                                        <x-card-select></x-card-select>
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
