<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Superheroe</h1>
    <form action="{{ route('superheroe.store') }}" method="post">
        @csrf
        <label for="">Gender</label>
        <select gender="gender_id">
            @foreach ($gender as $genere )
            <option value="{{ $genere->id }}">{{ $genere->gender }}</option>
            @endforeach
        </select>

        <br><br>
        <label for="">Real Name</label>
        <input typ="text" name="real_name">
        <br><br>

        <input type="submit" value="Create Superheroe">
    </form>

</body>
</html>