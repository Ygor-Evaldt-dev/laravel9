@extends('layouts/app')

@section('title', 'Editar usuário {{ $user->name }}')

<style>
  form {
    padding: 0px, 10px;
  }
</style>

@section('content')
  <h1>
    Editar Usuário {{ $user -> name }}
  </h1>

  <form action="{{ route('users.update', $user -> id) }}" method="POST">
    @method('PUT')
    @include('_partials/form')
    <button type="submit">
      Salvar
    </button>
    
  </form>

  @include('includes/validations-form')

  <p><a href="{{ route('users.index') }}">Cancelar</a></p>

@endsection 