<x-layout title="Editar Livro">
    <form method="POST" action="{{ route('books.update', $book) }}" class="app-form">
        @csrf
        @method('PUT')

        <div class="app-form__group">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ $book->name }}" required>
        </div>

        <div class="app-form__group">
            <label for="author">Autor:</label>
            <input type="text" id="author" name="author" value="{{ $book->author }}" required>
        </div>

        <div class="app-form__group">
            <label for="registration_number">Número de registro:</label>
            <input type="text" id="registration_number" name="registration_number"
                   value="{{ $book->registration_number }}" required>
        </div>

        <div class="app-form__group">
            <label for="status">Situação:</label>
            <select name="status" id="status" required>
                <option value="Emprestado" @if($book->status == 'Emprestado') selected @endif>Emprestado</option>
                <option value="Disponível" @if($book->status == 'Disponível') selected @endif>Disponível</option>
            </select>
        </div>

        <div class="app-form__group">
            <label for="genre">Gênero:</label>
            <select name="genre" id="genre" required>
                <option value="Ficção" @if($book->genre == 'Ficção') selected @endif>Ficção</option>
                <option value="Romance" @if($book->genre == 'Romance') selected @endif>Romance</option>
                <option value="Fantasia" @if($book->genre == 'Fantasia') selected @endif>Fantasia</option>
                <option value="Aventura" @if($book->genre == 'Aventura') selected @endif>Aventura</option>
                <!-- Adicione mais opções de gênero conforme necessário -->
            </select>
        </div>

        <button type="submit">Atualizar</button>
    </form>
</x-layout>
