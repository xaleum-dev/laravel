<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
</head>
<body>
    <h1>Book List</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Year Published</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }}</td>
            <td>{{ $book->genre }}</td>
            <td>{{ $book->year_published }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
