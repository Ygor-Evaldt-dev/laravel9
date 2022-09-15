@extends('layouts/app')

@section('title', 'Listagem de usuários')

@section('content')

<style>
  li {
    padding-bottom: 10px
  }

  .search {
    display: flex;
    gap: 10px;
    max-width: 400px;
  }
  

</style>

<h1 class="mt-4">Listagem de usuários</h1>

<section class="table-responsive">
  <table class="table table-bordered table-hover mt-4">
    <thead>
    <tr class="bg-secondary text-white">
      <th>Nome</th>
      <th>E-mail</th>
      <th class="col-1 text-center">Editar</th>
      <th class="col-1 text-center">Detalhes</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user -> name }}</td>
      <td>{{ $user -> email }}</td>
      <td class="text-center"><a class="btn btn-danger btn-sm" href="{{ route('users.details', $user -> id) }}">Detalhes</a></td>
      <td class="text-center"><a class="btn btn-secondary btn-sm" href="{{ route('users.edit', $user -> id) }}">Editar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</section>

<a class="btn btn-success" href="{{ route('users.create') }}">Cadastrar novo usuário</a>

@endsection 

