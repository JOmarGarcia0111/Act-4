<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UFT-8">
    <meta name = "viewport" content="width=device-width, initial-s">
    <title>Gender test</title>

</head>
<body>
    <hi>Gender</hi>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($gender as $item)
            
            <tr>
                
                
                <td>{{ $item->id }}</td>
                <td>{{ $item->gender }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>