@extends('layouts.master')




@section ('content')
    <h2>Player</h2>

<p>{{ $player->name }}</p>
<p>{{ $player->email }}</p>
<p>{{ $player->team->name }}</p>

@endsection

