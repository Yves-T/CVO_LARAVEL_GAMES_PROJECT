
@extends('layouts.main')

@section('title', 'Really delete game: '.$game->title)

@section('content')

    <div class="page-header">
        <h1>Delete {{ $game->title }} <small>Are you sure?</small></h1>
    </div>

    {!! Form::model($game, [
        'method'=>'delete',
        'route'=>['game.delete', $game->id]
    ]) !!}
    {!! Form::submit('Yes', ['class'=>'btn btn-danger']) !!}
    <a href="{{ route('game.index') }}" class="btn btn-default">No way!</a>
    {!! Form::close() !!}

@endsection