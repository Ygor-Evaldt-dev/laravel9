@extends('layouts/app')

@section('title', 'Criar novo usuário')

<style>
  form {
    padding: 0px, 10px;
  }
</style>

@section('content')
  <h1>
    Novo Usuário
  </h1>

  <form action="{{route('users.store')}}" method="POST">
    @csrf
    @include('_partials/form')
    <button type="submit">
      Cadastrar
    </button>

  @include('includes/validations-form')

  <p><a href="{{ route('users.index') }}">Cancelar</a></p>
  

@endsection 