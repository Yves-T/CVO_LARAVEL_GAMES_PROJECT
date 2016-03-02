
@extends('layouts.main')

@section('title', 'Edit game: '.$game->title)

@section('content')

    <div class="page-header">
        <h1>Edit Game <small>go on, mark it complete!</small></h1>
    </div>

    {!! Form::model($game, [
        'route' => ['game.update', $game->id],
        'method' => 'put'
    ]) !!}

    @include('games.form', ['btnText'=>'Save Game'])

    {!! Form::close() !!}

@endsection
