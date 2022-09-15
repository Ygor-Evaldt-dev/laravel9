@extends('layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')

  <h1>Detalhes do usuário {{$user -> name}}</h1>

  <ul>
    <li>
      <p><strong>Nome: </strong>{{$user -> name}}</p>
    </li>
    <li>
      <p><strong>E-mail: </strong>{{$user -> email}}</p>
    </li>
    <li>
      <p><strong>Data de cadastro: </strong>{{$user -> created_at}}</p>
    </li>
    <li>
      <p><strong>Ultima atualização: </strong>{{$user -> updated_at}}</p>
    </li>
  </ul>
  
  <form action=" {{ route('users.delete', $user -> id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar</button>
  </form>
  <p><a href="{{ route('users.index') }}">Retornar</a></p>
@endsection