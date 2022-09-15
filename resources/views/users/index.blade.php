@extends('layouts/app')

@section('title', 'Listagem de usuários')

@section('content')

<style>
  li {
    padding-bottom: 10px
  }

</style>

<h1>Listagem de usuários</h1>
<form action="{{ route('users.index') }}" method="GET">
    <input type="text" placeholder="Usuário" name="search"> 
    <button title="Buscar">Buscar</button>
</form>
<table class="table-auto hover:table-fixed">
  <thead>
    <tr>
      <th>Nome</th>
      <th>E-mail</th>
      <th>Editar</th>
      <th>Detalhes</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
      <tr>
        <td>{{ $user -> name }}</td>
        <td>{{ $user -> email }}</td>
        <td><a href="{{ route('users.details', $user -> id) }}">Detalhes</a></td>
        <td><a href="{{ route('users.edit', $user -> id) }}">Editar</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('users.create') }}">Cadastrar novo usuário</a>

@endsection 

