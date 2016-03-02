<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use App\Http\Requests\SaveGameRequest;

use App\Http\Requests;

class GamesController extends Controller
{
    public function index()
    {
        // alle games tonen
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function create()
    {
        // create formulier tonen
        $game = new Game();
        return view('games.create', compact('game'));
    }

    public function store(SaveGameRequest $request)
    {
        // formulier aan databank toevoegen
        Game::create($request->only('title', 'publisher', 'complete'));
        return redirect(route('game.index'));
    }

    public function edit($id)
    {
        // formulier tonen
        $game = Game::findOrFail($id);
        return view('games.edit', compact('game'));
    }

    public function update(SaveGameRequest $request, $id)
    {
        // aanpassen in de databank
        $game = Game::findOrFail($id);
        $game->update($request->only('title', 'publisher', 'complete'));
        return redirect(route('game.index'));
    }

    public function destroy($id)
    {
        // verwijderen uit databank
        $game = Game::findOrFail($id)->delete();
        return redirect(route('game.index'));
    }

    public function destroyConfirm($id)
    {
        // confirmatie formulier voor verwijderen
        $game = Game::findOrFail($id);
        return view('games.confirm', compact('game'));
    }
}
