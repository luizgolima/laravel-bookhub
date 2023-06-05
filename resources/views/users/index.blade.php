<x-layout title="Usuários">
    <table>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Número de Cadastro</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->registration_number }}</td>
                <td class="edit">
                    <a href="{{ route('users.edit', $user) }}">Editar</a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('users.create') }}">Criar usuário</a>
</x-layout>
