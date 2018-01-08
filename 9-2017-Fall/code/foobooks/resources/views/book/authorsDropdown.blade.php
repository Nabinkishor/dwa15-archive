<select name='author' id='author'>
    <option value="" selected="selected" disabled="disabled">Choose one...</option>
    @foreach($authorsForDropdown as $id => $name)
        <option value='{{ $id }}' {{ (isset($book) and $id == $book->author->id) ? 'SELECTED' : '' }}>{{ $name }}</option>
    @endforeach
</select>
