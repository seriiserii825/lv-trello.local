@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Projects list</h2>

    <div class="admin-layout__new">
        <a class="btn" href="{{ route('projects.create') }}">New project</a>
    </div>

    @if (count($projects))
        <table class="admin-table">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            @foreach ($projects as $project)
                <tr style="background: {{ $project->color }};">
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->created_at }}</td>
                    <td>
                        <div class="admin-table__actions">
                            <a href="{{ route('project.single', ['slug' => $project->slug]) }}"
                                class="btn btn--contrast">View </a>
                            <a href="{{ route('projects.edit', ['project' => $project->id]) }}"
                                class="btn">Edit</a>
                            <form action="{{ route('projects.destroy', ['project' => $project->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Do you want to delete?','Yes')"
                                    class="btn btn--danger">Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
