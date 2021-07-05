<form action="/note/{{ $note->id }}" method="POST">
    @csrf 
    @method('PUT')
    <div>
        <label for="content">Write Your Content</label>
        <input type="text" value ="{{ $note->content }}"name="content">
    </div>
    <button type="submit">Save</button>
</form>