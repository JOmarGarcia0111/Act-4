<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Superhero</title>
</head>
<body>
    <h1>Edit Superhero</h1>
    <form action="{{ route('superheroe.update', $superheroe->id) }}" method="post">
        @csrf
        @method('patch')

        <label for="gender_id">Gender</label>
        <select name="gender_id">
            @foreach ($generes as $gen) 
                <option value="{{ $gen->id }}" 
                    @if ($gen->id == $superheroe->gender_id) selected @endif>
                    {{ $gen->gender }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label for="universe_id">Universe</label>
        <select name="universe_id">
            @foreach ($universes as $uni)
                <option value="{{ $uni->id }}" 
                    @if ($uni->id == $superheroe->universe_id) selected @endif>
                    {{ $uni->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $superheroe->name }}">

        <br><br>

        <label for="real_name">Real Name</label>
        <input type="text" name="real_name" value="{{ $superheroe->real_name }}">

        <br><br>

        <label for="picture">Picture</label>
        <input type="text" name="picture" value="{{ $superheroe->picture }}">

        <br><br>

        <input type="submit" value="Edit">
        
        <br><br>
        <a href="{{ route('superheroe.index') }}">Back to list</a>
    </form>
</body>
</html>

