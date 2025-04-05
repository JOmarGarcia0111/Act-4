@extends('layouts.main')

@section('title', 'Edit Universe')

@section('content')
    <h1>Edit Universe</h1>

    <form action="{{ route('universe.update', $universe->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $universe->name }}" required>

        <br><br>

        <input type="submit" value="Edit Universe">

        <br><br>

        <a href="{{ route('universe.index') }}">Back to Universes List</a>
    </form>
@endsection
