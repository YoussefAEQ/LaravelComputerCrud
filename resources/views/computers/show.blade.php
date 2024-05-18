<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>
        <li>
            {{ $computer->name }} ( {{ $computer->origin }} ) - {{ $computer->price }}
            <a href="{{ route('computers.edit', $computer->id) }}">Edit</a>
            <form action="{{route('computers.destroy',$computer->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
            </form>
        </li>
    </ul>

</body>
</html>
