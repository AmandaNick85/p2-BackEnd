@extends('layouts.app')

@section('title', 'Criar Categoria')
@section('header', 'Criar Categoria')

@section('content')
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <label>Nome</label>
        <input type="text" name="nome" required>

        <label>Descrição</label>
        <textarea name="descricao"></textarea>

        <button class="button" type="submit">Salvar</button>
        <a class="button secondary" href="{{ route('categories.index') }}">Voltar</a>
    </form>
@endsection
