<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;
class PlayersController extends Controller
{
    public function show($id)
    {
        $player = Player::findOrFail($id);


        return view('players.show',['player' => $player]);
    }

    public  function index()
    {
        $players = Player::all();


        return view('pleyers.index',['players'=> $players]);
    }
}
