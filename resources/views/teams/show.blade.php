@extends('layouts.master')


<p>{{ $team->name }}</p>
<p>{{ $team->email }}</p>
<p>{{ $team->address }}</p>
<p>{{ $team->city }}</p>


@foreach($team->players as $player)
    <p><a href ="/players/{{$player->id}}">{{$player->first_name}} {{$player->last_name}}</a></p>


@endforeach