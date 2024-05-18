<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{Route('computers.store')}}" method="POST">

        @csrf

        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <label for="origin">Origin</label>
        <input type="text" id="origin" name="origin">
        <label for="price">Price</label>
        <input type="text" id="price" name="price">
        <button type="submit">add computer</button>
    </form>
</body>
</html>
