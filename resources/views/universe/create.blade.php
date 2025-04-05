@extends('layouts.main')

@section('title', 'Create Universe')

@section('content')
    <h1>Create Universe</h1>

    <form action="{{ route('universe.store') }}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" required>

        <br><br>

        <input type="submit" value="Create Universe">

        <br><br>

        <a href="{{ route('universe.index') }}">Back to Universes List</a>
    </form>
@endsection
