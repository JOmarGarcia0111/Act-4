<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UFT-8">
    <meta name = "viewport" content="width=device-width, initial-s">
    <title>Universe test</title>

</head>
<body>
    <hi>Universe</hi>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($universe as $item)
            
            <tr>
                
                
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>