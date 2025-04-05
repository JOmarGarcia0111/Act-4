@extends('layouts.main')

@section('title', 'Create Gender')

@section('content')
    <h1>Create Gender</h1>

    <form action="{{ route('gender.store') }}" method="post">
        @csrf
        <label for="name">Gender</label>
        <input type="text" name="name" required>

        <br><br>

        <input type="submit" value="Create Gender">

        <br><br>
        <a href="{{ route('gender.index') }}">Back to list</a>
    </form>
@endsection
