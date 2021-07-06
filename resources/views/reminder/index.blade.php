<a href="/reminder/create">New Note</a>
<table>
    <tr>
        <th>
            ID
        </th>
        <th>
            Title
        </th>
        <th>
            Date
        </th>
        <th>
            Time
        </th>
        <th>
            Important
        </th>

    </tr>
    @foreach($reminders as $reminder)

    <tr>
        <td>
            {{$reminder->id}}
        </td>
        <td>
            {{ $reminder->title }}
        </td>
        <td>
            {{ $reminder->date }}
        </td>
        <td>
            {{ $reminder->time }}
        </td>
        <td>
            {{ $reminder->important }}
        </td>
        <td>
            <a href="/reminder/{{ $reminder->id }}">Show</a>
            <a href="/reminder/{{ $reminder->id }}/edit">Edit</a>
            <form method="POST"action="reminder/{{ $reminder->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>