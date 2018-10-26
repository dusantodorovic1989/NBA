<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class teamsController extends Controller
{
        public function index()
        {
            $teams = Team::all();

            return view('teams.index',['teams' => $teams]);
        }

        public function show($id)
        {
            $team = Team::findOrFail($id);
            return view('teams.show',['team' => $team]);
        }
}
