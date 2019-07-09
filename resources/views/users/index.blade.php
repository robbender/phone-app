@extends('layout')

@section('content')
  
    <title>Directory</title>

    <h1 class="title is-size-1">Directory</h1>


    <div class="is-grouped is-pulled-right">
    <div class="field has-addons">
            <div class="control is-horizontal">
              <input class="input is-large" type="text" placeholder="Find a contact">
            </div>
            <div class="control">
              <a class="button is-info is-large">
                Search
              </a>
            </div>
    </div>
    </div>
    <br>
    <br>
    <br>

    @foreach ($users as $user)

    <div class="container">

    <div class="card">
        <div class="card-header-title is-size-1">
            <br>
            
            <p>
                <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
            </p>
        </div>

        <div class="card-image">

        </div>

        <div class="card-content">

        <p class="subtitle is-size-4 has-text-weight-semibold">
            Position:
            {{ $user->position }}
        </p>

        <p class="subtitle is-size-4 has-text-weight-semibold">
            Phone:
            {{ $user->phone }}
        </p>
        <div class="field is-grouped is-grouped-right">
                <p class="control">
                    <a href="/users/{{ $user->id }}/edit" class="button is-info">Edit</a>

                    {{-- <button type="submit" class="button is-link">Update</button> --}}
                </p>
                    <form method="POST" action="/users/{{ $user->id }}">
                        @method('DELETE')
                        @csrf
                        <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-danger">Delete</button>
                        </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
    </div>
    <br>
    @endforeach
    <br>

    <p class="control">
        <a href="/users/create" class="button is-info is-pulled-right is-large">New Contact</a>
    </p>
    <br>
    <br>
    <footer class="footer">
            <div class="content has-text-centered">
              <p>
                <strong>Directory</strong> by <a href="">Web Services</a>.
                2019
              </p>
            </div>
          </footer>

    @endsection