<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Superhero</title>
</head>
<body>
    <h1>Create Superhero</h1>
    <form action="{{ route('superheroe.store') }}" method="post">
        @csrf
        
        <label for="gender_id">Gender</label>
        <select name="gender_id">
            @foreach ($generes as $gen) 
                <option value="{{ $gen->id }}">{{ $gen->gender }}</option>
            @endforeach
        </select>

        <br><br>

        <label for="universe_id">Universe</label>
        <select name="universe_id">
            @foreach ($universes as $uni)
                <option value="{{ $uni->id }}">{{ $uni->name }}</option>
            @endforeach
        </select>

        <br><br>

        <label for="name">Name</label>
        <input type="text" name="name" required>

        <br><br>

        <label for="real_name">Real Name</label>
        <input type="text" name="real_name" required>

        <br><br>

        <label for="picture">Picture</label>
        <input type="text" name="picture" required>

        <br><br>

        <input type="submit" value="Create Superhero">
        
        <br><br>
        <a href="{{ route('superheroe.index') }}">Back to list</a>
    </form>
</body>
</html>
