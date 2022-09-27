@extends('layouts/app')

@section('title', 'Editar usuário {{ $user->name }}')

<style>
  form {
    padding: 0px, 10px;
  }
</style>

@section('content')
  <h1 class="mt-3">
    Editar usuário: <span class="text-secondary">{{ $user -> name }}</span>
  </h1>

  <form class="form mt-3 col-md-6" action="{{ route('users.update', $user -> id) }}" method="POST">
    @method('PUT')
    @include('users/_partials/form')
    <button class="btn btn-success btn-sm" type="submit">
      Salvar
    </button>
    <a class="btn btn-secondary btn-sm" href="{{ route('users.index') }}">Cancelar</a>
  </form>

  @include('includes/validations-form')


@endsection 