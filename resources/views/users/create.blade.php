@extends('layouts/app')

@section('title', 'Criar novo usuário')

<style>
  form {
    padding: 0px, 10px;
  }
</style>

@section('content')
  <h1 class="mt-3">
    Novo usuário
  </h1>

  <form class="form mt-3 col-md-6" action="{{route('users.store')}}" method="POST">
    @csrf
    @include('_partials/form')
    <button class="btn btn-success btn-sm" type="submit">
      Cadastrar
    </button>

  @include('includes/validations-form')

  <a class="btn btn-secondary btn-sm" href="{{ route('users.index') }}">Cancelar</a>
  

@endsection 