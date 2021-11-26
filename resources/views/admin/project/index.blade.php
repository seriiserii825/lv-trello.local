@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Projects list</h2>
    @if(count($projects))
        <table class="admin-table">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Date</th>
            </tr>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->created_at }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
