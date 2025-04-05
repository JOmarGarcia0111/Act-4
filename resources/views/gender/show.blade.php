@extends('layouts.main')

@section('title', 'Gender Details')

@section('content')
    <h1>{{ $gender->gender }}</h1>

    <p><strong>Created At:</strong> {{ $gender->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $gender->updated_at }}</p>

    <a href="{{ route('gender.index') }}">Back to list</a>
@endsection
