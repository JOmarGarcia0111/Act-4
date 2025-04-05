<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Superheroes App')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('superheroe.index') }}">Superheroes</a></li>
                <li><a href="{{ route('universe.index') }}">Universes</a></li>
                <li><a href="{{ route('gender.index') }}">Genders</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Superheroes App</p>
    </footer>
</body>
</html>
