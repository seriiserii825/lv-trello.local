<div class="card">
    <h2 class="card__title"><span>{{ $card->title }}</span> ({{ $name }})</h2>
    <form action="{{ route('project.update', ['id' => $card->id, 'slug' => $slug]) }}" method="post">
        @csrf
        @method('PUT')
        @foreach ($columns as $column)
            <div class="form-radio">
                <label for="{{ $column->id }}">{{ $column->title }}</label>
                <input type="radio" id="{{ $column->id }}" name="column_id" value="{{ $column->id }}"
                       @if($column->id === $card->column_id) checked @endif>
            </div>
        @endforeach
        <input type="submit" class="btn" value="Update">
    </form>
    @if($delete)
        <footer class="card__footer">
            <form action="{{ route('project.delete', ['id' => $card->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Do you want to delete?','Yes')" class="btn btn--danger">
                    Delete
                </button>
            </form>
        </footer>
    @endif
</div>
