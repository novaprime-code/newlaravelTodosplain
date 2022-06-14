<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Add new todo</h1>
    <form action="/todos" method="post">
        @csrf
        <p>
            Title : <input type="text" name="title">
        </p>
        <p>
            Description <br>
            <textarea name="description" id="" cols="60" rows="5"></textarea>

        </p>
        <input type="submit" value="Add">
    </form>
</body>

</html>
