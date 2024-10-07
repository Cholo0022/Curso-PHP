@extends('layouts.app')

@section('content')
    <form action="{{route('note.store')}}" method="post">
        @csrf
        <label>Titulo:</label>
        <input type="text" name="title"><br>
        @error('title')
            <p style="color: red"> {{ $message }} </p>
        @enderror
        <label>Descripción:</label>
        <input type="text" name="description"><br>
        @error('description')
            <p style="color: red"> {{ $message }} </p>
        @enderror
        <input type="submit" value="Crear">

    </form>
    <a href="{{ route('note.index')}}">Notas</a>
@endsection
