<x-layout>

    <div>Notes</div>

    <div>
        <a href="{{ route('note.create') }}">Create Note</a>
    </div>

    <div>
        @foreach ($notes as $note)
            <div>
                <div class="note-body">{{ Str::words($note->note, 30) }}</div>

                <div>
                    <a href="{{ route('note.show', $note->id) }}">View</a>
                    <a href="{{ route('note.edit', $note->id) }}">Edit</a>
                    <form action="{{ route('note.destroy', $note->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

</x-layout>
