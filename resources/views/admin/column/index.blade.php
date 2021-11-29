@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Columns list</h2>

    <div class="admin-layout__new">
        <a class="btn" href="{{ route('columns.create') }}">New column</a>
    </div>

    @if (count($columns))
        <table class="admin-table">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            @foreach ($columns as $column)
                <tr style="background: {{ $column->color }};">
                    <td>{{ $column->id }}</td>
                    <td>{{ $column->title }}</td>
                    <td>{{ $column->created_at }}</td>
                    <td>
                        <div class="admin-table__actions">
                            <a href="{{ route('columns.edit', ['column' => $column->id]) }}"
                                class="btn">Edit</a>
                            <form action="{{ route('columns.destroy', ['column' => $column->id]) }}" method="post">
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
