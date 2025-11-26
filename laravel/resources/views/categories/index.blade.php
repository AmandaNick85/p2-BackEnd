@extends('layouts.app')

@section('title', 'Categorias')
@section('header', 'Lista de Categorias')

@section('content')
    <a href="{{ route('categories.create') }}" class="button">Nova Categoria</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->nome }}</td>
                    <td>{{ $category->descricao }}</td>
                    <td class="actions">
                        <a class="button secondary" href="{{ route('categories.edit', $category->id) }}">
                            Editar
                        </a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="button" onclick="return confirm('Excluir categoria?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}
@endsection
