@extends('layouts/app')

@section('title', "Editar comentário do { $user->name }")

<style>
  form {
    padding: 0px, 10px;
  }
</style>

@section('content')
  <h1 class="mt-5 mb-5">
    Editar comentário: <span class="text-secondary">{{ $user -> name }}</span>
  </h1>

  <form class="form mt-3 col-md-6" action="{{ route('comments.update', $comment -> id) }}" method="POST">
    @method('PUT')
    @include('users/comments/_partials/form')
    <button class="btn btn-success btn-sm" type="submit">
      Salvar
    </button>
    <a class="btn btn-secondary btn-sm" href="{{ route('comments.index', $user -> id) }}">Cancelar</a>
  </form>

  @include('includes/validations-form')


@endsection 