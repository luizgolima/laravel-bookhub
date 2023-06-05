<x-layout title="Criar Usuário">
    <form method="POST" action="{{ route('users.store') }}" class="app-form">
        @csrf

        <div class="app-form__group">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="app-form__group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="app-form__group">
            <label for="registration_number">Número de Cadastro:</label>
            <input type="text" id="registration_number" name="registration_number" required>
        </div>

        <button type="submit">Criar Usuário</button>

        <a href={{ route('users.index') }}>Voltar</a>
    </form>
</x-layout>
