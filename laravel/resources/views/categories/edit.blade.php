@extends('layouts.app')

@section('title', 'Editar Categoria')
@section('header', 'Editar Categoria')

@section('content')
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome</label>
        <input type="text" name="nome" value="{{ $category->nome }}" required>

        <label>Descrição</label>
        <textarea name="descricao">{{ $category->descricao }}</textarea>

        <button class="button" type="submit">Atualizar</button>
        <a class="button secondary" href="{{ route('categories.index') }}">Cancelar</a>
    </form>
@endsection
