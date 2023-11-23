@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <h1>Welcome to Laravel</h1>
    <ul>
        @for ($i = 0; $i < 10; $i++)
            <li>{{ $i }}</li>
        @endfor
    </ul>
@endsection
