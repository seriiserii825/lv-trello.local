<form action="{{ route('project.update', ['id' => $card->id, 'slug' => $slug]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <select name="column_id" id="column_id">
            @foreach ($columns as $column)
                <option @if ($column->id === $card->column_id) selected @endif value="{{ $column->id }}">{{ $column->title }} </option>
            @endforeach
        </select>
    </div>
    <input type="submit" class="btn" value="Update">
</form>
