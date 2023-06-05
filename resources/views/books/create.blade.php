<x-layout title="Cadastrar Livro">
    <form action="{{ route('books.store') }}" method="POST" class="app-form">
        @csrf
        <div class="app-form__group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="app-form__group">
            <label for="author">Autor:</label>
            <input type="text" name="author" id="author" required>
        </div>
        <div class="app-form__group">
            <label for="registration_number">Número de registro:</label>
            <input type="text" name="registration_number" id="registration_number" required>
        </div>
        <div class="app-form__group">
            <label for="status">Situação:</label>
            <select name="status[]" id="status" multiple required>
                <option value="Emprestado">Emprestado</option>
                <option value="Disponível">Disponível</option>
            </select>
        </div>
        <div class="app-form__group">
            <label for="genre">Gênero:</label>
            <select name="genre[]" id="genre" multiple required>
                <option value="Ficção">Ficção</option>
                <option value="Romance">Romance</option>
                <option value="Fantasia">Fantasia</option>
                <option value="Aventura">Aventura</option>
                <!-- Adicione mais opções de gênero conforme necessário -->
            </select>
        </div>
        <button type="submit">Salvar</button>
        <a href="{{ route('books.index') }}">Voltar</a>
    </form>
</x-layout>
