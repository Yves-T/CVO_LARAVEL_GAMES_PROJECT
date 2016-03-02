@extends('layouts.main')

@section('title', 'Overview')

@section('content')

    <div class="page-header">
        <h1>All Games
            <small>gotta catch'em all</small>
        </h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ route('game.create') }}" class="btn btn-primary">Create Game</a>
        </div>
    </div>

    @if($games->isEmpty())
        <p>There are no games! :(</p>
    @else
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Publisher</th>
                <th>Complete</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($games as $game)
                <tr>
                    <td>{{ $game->title }}</td>
                    <td>{{ $game->publisher }}</td>
                    <td>{{ $game->complete ? 'Yes':'No' }}</td>
                    <td>
                        <a href="{{route('game.edit',$game->id)}}" class="btn btn-default">Edit</a>
                        <a href="{{ route('game.confirm', $game->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection