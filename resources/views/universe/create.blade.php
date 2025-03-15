<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create universe</h1>

    <form action="{{ route('universe.store') }}" method="post">
        @csrf
        <label for="">Name</label>
        <input typ="text" name="name">

        <input type="submit" value="Create Universe">
    </form>

    
</body>
</html>