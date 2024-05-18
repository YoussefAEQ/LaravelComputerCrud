<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
    <h1>List of Computers</h1>
    <a href="{{ route('computers.create') }}">Add New Computer</a>
    <ul>
        @foreach ($computers as $computer)
            <li>
                <a href="{{ route('computers.show', $computer->id) }}">
                    {{ $computer->name }} ({{ $computer->origin }}) - ${{ $computer->price }}
                </a>
                <form action="{{ route('computers.destroy', $computer->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
