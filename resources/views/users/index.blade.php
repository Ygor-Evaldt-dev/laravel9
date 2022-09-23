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

<section class="table-responsive mb-3">
  <table class="table table-bordered table-hover mt-4">
    <thead>
    <tr class="bg-secondary text-white">
      <th class="col-md-3">Nome</th>
      <th class="col-md-4">E-mail</th>
      <th class=" text-center col-md-1">Editar</th>
      <th class=" text-center col-md-1">Deletar</th>
      <th class=" text-center col-md-1">Detalhes</th>
      <th class=" text-center col-md-1">Comentários</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user -> name }}</td>
      <td>{{ $user -> email }}</td>
      <td class="text-center"><a class="btn btn-secondary btn-sm" href="{{ route('users.edit', $user -> id) }}">Editar</a></td>
      <td>
        <form action=" {{ route('users.delete', $user -> id) }}" method="POST">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger btn-sm" type="submit">Deletar</button>
        </form>
      </td>
      <td class="text-center"><a class="btn btn-info btn-sm" href="{{ route('users.details', $user -> id) }}">Detalhes</a></td>
      <td class="text-center"><a class="btn btn-primary btn-sm" href="{{ route('comments.index', $user -> id) }}">Comentarios</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</section>

<a class="btn btn-success" href="{{ route('users.create') }}">Cadastrar novo usuário</a>

@endsection 

