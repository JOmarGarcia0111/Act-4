<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superhero List</title>
</head>
<body>
    <h1>Superheroes</h1>

    <a href="{{ route('superheroe.create') }}">
        <button>Create New Superhero</button>
    </a>
    
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($superheroe as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
    
                        <a href="{{ route('superheroe.edit', $item->id) }}">
                            <button>Edit</button>
                        </a>

                        <a href="{{ route('superheroe.show', $item->id) }}">
                            <button>Show</button>
                        </a>

                        <form action="{{ route('superheroe.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
