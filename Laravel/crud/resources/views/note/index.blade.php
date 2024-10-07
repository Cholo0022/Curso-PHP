@extends('layouts.app')

@section('content')
    <a href="{{ route('note.create') }}">Cargar notas</a>
    <ul>

        @forelse ($notes as $note)
            <li><a href="{{ route('note.show', $note->id) }}"> {{ $note->title }}</a> | <a
                    href="{{ route('note.edit', $note->id) }}">Editar</a> |
                <form method="POST" action="{{ route('note.destroy', $note->id) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Borrar">
                </form>
            </li>
        @empty
            <p>No existen notas</p>
        @endforelse

    </ul>
@endsection
