<!DOCTYPE html>
<html>
<head>
    <title>Author List</title>
</head>
<body>
    <h1>Author List</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Bio</th>
            <th>Books</th>
        </tr>
        @foreach($authors as $author)
        <tr>
            <td>{{ $author->name }}</td>
            <td>{{ $author->email }}</td>
            <td>{{ $author->bio }}</td>
            <td>
                <ul>
                    @foreach($author->books as $book)
                        <li>{{ $book->title }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
