@extends('layouts.admin-layout')
@section('content')
    <h2 class="admin-layout__title">Cards list</h2>

    <div class="admin-layout__new">
        <a class="btn" href="{{ route('cards.create') }}">New card</a>
    </div>

    @if (count($cards))
        <table class="admin-table">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>User</th>
                <th>Project</th>
                <th>Column</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            @foreach ($cards as $card)
                <tr>
                    <td>{{ $card->id }}</td>
                    <td>{{ $card->title }}</td>
                    <td>{{ $card->slug }}</td>
                    <td>{{ $card->user->name }}</td>
                    <td style="background: {{ $card->project->color }}">{{ $card->project->title }}</td>
                    <td>{{ $card->column->title }}</td>
                    <td>{{ $card->created_at }}</td>
                    <td>
                        <div class="admin-table__actions">
                            <a href="{{ route('cards.edit', ['card' => $card->id]) }}" class="btn">Edit</a>
                            <form action="{{ route('cards.destroy', ['card' => $card->id]) }}" method="post">
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
