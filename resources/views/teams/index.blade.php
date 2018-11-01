@extends('layouts.master')


@section('title')

    <h2>teams<h2>
@endsection

@section('content')
<h1><a href="/">Teams</a> </h1>
   <ul>
       @foreach($teams as $team)
       <li>
           <div class="blog-post">
               <h2 class="blog-post-title">
                       <a href="/teams/{{ $team->id }}">
                           {{ $team->name }}
                       </a>
               </h2>
                
                 
               
           </div>
       </li>
       @endforeach   
       </ul>
@endsection

