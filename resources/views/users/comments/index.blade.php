@extends('layouts/app')

@section('title', "Comentários do Usuário {$user -> name}")

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

<h1 class="mt-4">Comentários do usuário {{ $user -> name }}</h1>

<section class="table-responsive">
  <table class="table table-bordered table-hover mt-4">
    <thead>
    <tr class="bg-secondary text-white">
      <th class="col-md-9">Conteúdo</th>
      <th class="col-md-1">Visível</th>
      <th class="col-md-1 text-center">Editar</th>
      <th class="col-md-1 text-center">Deletar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comments as $comment)
    <tr>
      <td>{{ $comment -> body }}</td>
      <td>{{ $comment -> visible ? 'Sim' : 'Não'}}</td>
      <td class="text-center">
        <a class="btn btn-info btn-sm" href="{{ route('comments.edit', ['user' => $user->id, 'id' => $comment->id]) }}">Editar</a>
      </td>
      <td class="text-center">
        <form action="{{ route('comments.delete', $comment->id) }}" method="POST">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger btn-sm" type="submit">Deletar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</section>

<a class="btn btn-success" href="{{ route('comments.create', $user -> id)}}">Novo comentário</a>
<a class="btn btn-secondary" href="{{ route('users.index') }}">Retornar</a>

@endsection 

