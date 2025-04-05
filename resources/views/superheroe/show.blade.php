@extends('layouts.main')

@section('title', 'Show Superhero')

@section('content')
    <h1>{{ $superheroe->name }}</h1>

    <p><strong>Real Name:</strong> {{ $superheroe->real_name }}</p>
    <p><strong>Universe:</strong> {{ $superheroe->universe->name }}</p>
    <p><strong>Gender:</strong> {{ $superheroe->gender->gender }}</p>
    <p><strong>Picture:</strong> {{ $superheroe->picture }}</p>
    <p><strong>Created At:</strong> {{ $superheroe->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $superheroe->updated_at }}</p>

    <a href="{{ route('superheroe.index') }}">Back to list</a>
@endsection
