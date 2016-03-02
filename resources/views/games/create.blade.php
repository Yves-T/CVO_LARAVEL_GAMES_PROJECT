@extends('layouts.main')
@section('title','Create new game')
@section('content')
    <div class="page-header">
        <h1>Create game
            <small>and someday finish it....</small>
        </h1>
    </div>



    {!! Form::model($game, [
    'route' => 'game.store',
    'method'=> 'post'
    ]) !!}

    @include('games.form')
    {!! Form::close() !!}

@endsection