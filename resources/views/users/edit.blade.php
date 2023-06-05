<x-layout title="Editar Usuário">
    <form method="POST" action="{{ route('users.update', $user) }}" class="app-form">
        @csrf
        @method('PUT')

        <div class="app-form__group">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="app-form__group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="app-form__group">
            <label for="registration_number">Número de Cadastro:</label>
            <input type="text" id="registration_number" name="registration_number"
                   value="{{ $user->registration_number }}" required>
        </div>

        <button type="submit">Atualizar</button>
        <a href="{{ route('users.index') }}">Voltar</a>
    </form>
</x-layout>
