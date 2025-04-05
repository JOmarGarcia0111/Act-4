@extends('layouts.main')

@section('title', 'Show Universe')

@section('content')
    <h1>{{ $universe->name }}</h1>

    <p><strong>Created At:</strong> {{ $universe->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $universe->updated_at }}</p>

    <a href="{{ route('universe.index') }}">Back to list</a>
@endsection
