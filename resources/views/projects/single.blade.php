@extends('layouts.front-layout')
@section('content')
    <div class="single-project" style="background: {{ $project->color }}">
        <div class="container">
            <h2 class="single-project__title">{{ $project->title }}</h2>
            <table class="project-table">
                <thead>
                    <th>Wait to do</th>
                    <th>To do</th>
                    <th>In progress</th>
                    <th>Done</th>
                    <th>Tested</th>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
