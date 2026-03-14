<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main</title>
</head>
<body>
    <h1>Welcome to the Main Page</h1>
    <p>¡You can write here!</p>
    <textarea placeholder="Write Here"></textarea><br>
    <a href="{{ route('books') }}">Books</a><br>
    <a href="{{ route('authors') }}">Authors</a><br>
    <a href="{{ route('publishers') }}">Publishers</a>
</body>
</html>