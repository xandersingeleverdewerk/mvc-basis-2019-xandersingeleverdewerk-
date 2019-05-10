<!DOCTYPE html>
<html>
<head>
        <title></title>
</head>
<body>
<ul>
    @foreach($books as $book)
        <li>id = {{ $book->id }}</li>
        <li>title = {{ $book->title }}</li>
        <li>description = {{ $book->description }}</li>
        <li>isbn = {{ $book->isbn }}</li><br>
    @endforeach
</ul>
</body>
</html>
