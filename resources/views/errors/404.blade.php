@extends('layouts.main')

@section('title', 'Not found?!')

@section('content')

    <div class="page-header">
        <h1>404 <small>game not played</small></h1>
    </div>

    <p class="lead">
        Sorry...
    </p>

    <a href="{{ route('game.index') }}" class="btn btn-primary">Show games I did play...</a>

@endsection
