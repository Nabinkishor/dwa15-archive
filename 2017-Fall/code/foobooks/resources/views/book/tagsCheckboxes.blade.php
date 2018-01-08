<div class='tags'>
    @foreach ($tagsForCheckboxes as $id => $name)
        <input
            type='checkbox'
            value='{{ $id }}'
            name='tags[]'
            id='tags_{{ $id }}'
            {{ (isset($tagsForThisBook) and in_array($name, $tagsForThisBook)) ? 'CHECKED' : '' }}
        >
        <label for='tags_{{ $id }}'>{{ $name }}</label><br>
    @endforeach
</div>
