@extends('layouts.master')




@section ('content')
    <h2>Player</h2>

<p>{{ $player->first_name }} {{$player->last_name}}</p>
<p>{{ $player->email }}</p>
<p>{{ $player->team->name }}</p>

@endsection

