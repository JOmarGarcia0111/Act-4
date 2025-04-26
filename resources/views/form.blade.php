<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('upload') }}" method ="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="archivo" id="">
    <input type="submit"value="Subir archivo">
    </form>
    
    <hr>
    <form action="{{ route('download') }}"method="get">
    @csrf
    <input type="submit" value="Descargar">
    </form>
</body>
</html>