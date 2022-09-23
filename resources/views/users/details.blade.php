@extends('layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')

  <h1 class="pt-3">Detalhes do usuário {{$user -> name}}</h1>

  <ul class="list-group pt-4 pb-4 col-md-6">
    <li class="list-group-item">
      <strong>Nome: </strong>{{$user -> name}}
    </li>
    <li class="list-group-item">
     <strong>E-mail: </strong>{{$user -> email}}
    </li>
    <li class="list-group-item">
     <strong>Data de cadastro: </strong>{{$user -> created_at}}
    </li>
    <li class="list-group-item">
     <strong>Ultima atualização: </strong>{{$user -> updated_at}}
    </li>
  </ul>
  
  <form action=" {{ route('users.delete', $user -> id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger btn-sm" type="submit">Deletar</button>
    <a class="btn btn-secondary btn-sm" href="{{ route('users.index') }}">Retornar</a>
  </form>
@endsection