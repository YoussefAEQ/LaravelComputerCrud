<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{Route('computers.update',$computer->id)}}" method="POST">

        @csrf
        @method('put')

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{$computer->name}}">
        <label for="origin">Origin</label>
        <input type="text" id="origin" name="origin" value="{{$computer->origin}}">
        <label for="price">Price</label>
        <input type="text" id="price" name="price" value="{{$computer->price}}">
        <button type="submit">Update</button>
    </form>
</body>
</html>
