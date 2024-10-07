@extends('layouts.app')

@section('content')
    <a href="{{route('note.index')}}">Volver</a>
    <form action="{{route('note.update', $note->id)}}" method="post">
        @csrf
        @method('PUT')
        <label>Titulo:</label>
        <input type="text" name="title" value="{{$note->title}}"><br>
        <label>Descripcción</label>
        <input type="text" name="description" value="{{$note->description}}">
        <input type="submit" value="Actualizar">
    </form>
@endsection
