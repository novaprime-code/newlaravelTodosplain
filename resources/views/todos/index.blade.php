<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>List of all todos</h1>
    @foreach ($todos as $todo)
        <h4>{{ $todo->title }}</h4>
        <p>
            {{ $todo->created_at->diffFOrHumans() }}
        </p>
        <a href="/todos/{{ $todo->id }}">Read more</a>
        <form action="/todos/{{ $todo->id }}" method="post">
            <input type="submit" value="Delete">
            @csrf
        </form>
    @endforeach
</body>

</html>
