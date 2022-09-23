@extends('layouts/app')

@section('title', "Novo comentário para o usuário {{ $user -> name }}")

<style>
  form {
    padding: 0px, 10px;
  }
</style>

@section('content')
  <h1 class="mt-4">
    Novo comentário para {{ $user -> name }}
  </h1>

  <form class="form mt-4 col-md-6" action="{{route('comments.store', $user->id)}}" method="POST">
    @csrf
    @include('users/comments/_partials/form')
    <button class="btn btn-success btn-sm" type="submit">
      Enviar
    </button>

  @include('includes/validations-form')

  <a class="btn btn-secondary btn-sm" href="{{ route('comments.index', $user -> id) }}">Cancelar</a>
   

@endsection 