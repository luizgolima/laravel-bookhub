# Bookhub

O Bookhub é um projeto Laravel que oferece uma plataforma para gerenciar uma biblioteca de livros. Ele utiliza o Laravel
Sail para configurar e executar o ambiente de desenvolvimento local com Docker. O sistema de templates Blade é utilizado
para renderização de páginas e o banco de dados MySQL para armazenar os dados.

## Visão geral do projeto

O Bookhub é uma aplicação web que permite aos usuários gerenciar uma biblioteca de livros. Ele oferece funcionalidades
para criar, ler, atualizar e excluir usuários da biblioteca, bem como para gerenciar o acervo de livros. Além disso, é
possível classificar os livros por gênero e realizar empréstimos aos usuários da biblioteca.

## Tecnologias utilizadas

- PHP
- Laravel
- MySQL
- Docker
- Composer

## Requisitos

Antes de começar, certifique-se de ter os seguintes requisitos instalados em seu ambiente de desenvolvimento:

- PHP >= 8.0
- Composer
- Docker

## Instalação

1. Clone o repositório do projeto:

```bash
git clone https://github.com/luizgolima/bookhub.git
```

2. Navegue até o diretório do projeto:

```bash
cd bookhub
```

3. Copie o arquivo de ambiente de exemplo e configure as variáveis de ambiente:

```bash
cp .env.example .env
```

4. Abra o arquivo .env e configure as informações de conexão com o banco de dados. Certifique-se de que as configurações
   de host, porta, nome do banco de dados, nome de usuário e senha estão corretas para a instalação do MySQL. Por
   exemplo:

```bash
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=usuario_do_banco_de_dados
DB_PASSWORD=senha_do_banco_de_dados
```

5. Inicie os contêineres Docker usando o Laravel Sail:

```bash
./vendor/bin/sail up -d
```

6. Execute as migrações do banco de dados para criar as tabelas necessárias:

```bash
./vendor/bin/sail artisan migrate
```

7. O projeto está pronto para ser executado. Acesse-o no seu navegador em http://localhost.

## Funcionalidades

- CRUD de usuários da biblioteca
    - Os usuários da biblioteca podem ser criados, lidos, atualizados e excluídos.

  **Campos obrigatórios:**

    - Nome: nome do usuário da biblioteca.
    - Email: endereço de e-mail do usuário da biblioteca.
    - Número de Cadastro: número de cadastro do usuário da biblioteca.

- CRUD de livros
    - Os livros podem ser criados, lidos, atualizados e excluídos.

  **Campos obrigatórios:**

    - Nome: nome do livro.
    - Autor: autor do livro.
    - Número de Registro: número de registro do livro.
    - Situação: situação do livro (emprestado ou disponível).

- Classificação dos livros por Gênero
    - Os livros podem ser classificados em diferentes gêneros, como Ficção, Romance, Fantasia, Aventura, etc.

- Funcionalidade de empréstimo dos livros
    - Os livros podem ser emprestados aos usuários da biblioteca.
    - É possível cadastrar um novo empréstimo, especificando a data de devolução.
    - Existe a opção de marcar o empréstimo como atrasado ou devolvido.

## Licença

Este projeto é licenciado sob a [MIT License](LICENSE).


   
