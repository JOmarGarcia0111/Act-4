<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Superheroes App')</title>

    @vite(['resources/sass/style.scss', 'resources/js/app.js'])
</head>
<body>


    <nav>
        <ul>
            <li><a href="{{ route('superheroe.index') }}">Superheroes</a></li>
            <li><a href="{{ route('gender.index') }}">Genders</a></li>
            <li><a href="{{ route('universe.index') }}">Universes</a></li>
        </ul>
    </nav>


    <main>
        @yield('content') 
    </main>

   
    <footer>
        <p>&copy; {{ date('Y') }} Superheroes App</p>
    </footer>
    
</body>
</html>
