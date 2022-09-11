@extends('layouts.app')

@section('title', 'Lista dos usuários')

@section('content')
<h1>Listagem de usuários</h1>
  <ul>
    @foreach ($users as $user)
      <li>
        {{$user -> name}} -
        {{$user -> email}}
        <a href="{{ route('user.show', $user->id) }}">Detalhes</a>
      </li>   
    @endforeach
  </ul>
@endsection