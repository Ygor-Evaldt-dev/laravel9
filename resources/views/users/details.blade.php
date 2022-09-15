@extends('layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')

  <h1 class="pt-3">Detalhes do usuário {{$user -> name}}</h1>

  <ul class="list">
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
    <button class="btn btn-danger btn-sm" type="submit">Deletar</button>
    <a class="btn btn-secondary btn-sm" href="{{ route('users.index') }}">Retornar</a>
  </form>
@endsection