<form action='/practice/30b' method='POST'>

    {{ csrf_field() }}

    <select name="author_id">
        <option value="" selected="selected">Please choose one</option>
        <option value="1">Author 1</option>
        <option value="2">Author 2</option>
        <option value="3">Author 3</option>
        <option value="D">Author D (should fail because its value is non-numeric)</option>
    </select>

    @include('modules.error-field', ['fieldName' => 'author_id'])

    <input type='submit' value='Submit'>

</form>
