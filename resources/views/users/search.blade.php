@extends('layout')

@section('content')

    <h1>Search Results</h1>


@foreach ($users as $user)

<li>{{ $users->name }}</li>

@endforeach



@endsection

