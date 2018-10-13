@extends('app.layout')

@section('title', 'Welcome')
    



@section('content')
    <h1>Welcome</h1>
    <p> ini page welcome </p>

    <ul>
    @foreach($tasks as $task)
        <li> {{ $task }} </li>
    @endforeach
    </ul>

@endsection