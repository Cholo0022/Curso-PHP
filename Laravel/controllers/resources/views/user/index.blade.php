<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Listado de usuarios:</h1>

    @forelse ($users as $user)
        <li>{{ $user->name }}</li>
    @empty
        <p>No existen usuarios registrados</p>
    @endforelse

    {{--
    Otra forma de usar condicional
    

    @if ($users->isEmpty())
        <p>No existen usuarios</p>
    @else
        @foreach ($users as $user)
            <li> {{ $user->name }} </li>
        @endforeach
    @endif
--}}
</body>

</html>
