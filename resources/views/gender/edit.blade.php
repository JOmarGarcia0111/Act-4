@extends('layouts.main')

@section('title', 'Edit Gender')

@section('content')
    <h1>Edit Gender</h1>
    <form action="{{ route('gender.update', $gender->id) }}" method="post">
        @csrf
        @method('patch')

        <br><br>

        <label for="name">Gender</label>
        <input type="text" name="name" value="{{ $gender->gender }}" required>

        <br><br>

        <input type="submit" value="Edit">

        <br><br>
        <a href="{{ route('gender.index') }}">Back to list</a>
    </form>
@endsection
