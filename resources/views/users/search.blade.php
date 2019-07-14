@extends('layout')

@section('content')

    <h1>Search Results</h1>


@foreach ($users as $user)

<li>{{ $users }}</li>

@endforeach



@endsection

