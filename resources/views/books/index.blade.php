<x-layout title="Livros">
    <table>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Autor</th>
            <th>Número de registro</th>
            <th>Situação</th>
            <th>Gênero</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->registration_number }}</td>
                <td>{{ $book->status }}</td>
                <td>{{ $book->genre }}</td>
                <td class="edit">
                    <a href="{{ route('books.edit', $book) }}">Editar</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('books.create') }}">Cadastrar Livro</a>
</x-layout>
