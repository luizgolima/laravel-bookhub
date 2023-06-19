# Bookhub

Bookhub is a Laravel project that provides a platform for managing a book library. It uses Laravel Sail to configure and run the local development environment with Docker. The Blade template system is used for page rendering, and the MySQL database is used to store the data.

## Project Overview

Bookhub is a web application that allows users to manage a book library. It offers functionalities to create, read, update, and delete library users, as well as manage the book collection. Additionally, users of the library can classify books by genre and borrow them.

## Technologies Used

- PHP
- Laravel
- MySQL
- Docker
- Composer

## Requirements

Before getting started, make sure you have the following requirements installed in your development environment:

- PHP >= 8.0
- Composer
- Docker

## Installation

1. Clone the project repository:

```bash
git clone https://github.com/luizgolima/bookhub.git
```

2. Navigate to the project directory:

```bash
cd bookhub
```

3. Copy the example environment file and configure the environment variables:

```bash
cp .env.example .env
```

4. Open the .env file and configure the database connection information. Make sure the host, port, database name, username, and password settings are correct for your MySQL installation. For example:

```bash
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=usuario_do_banco_de_dados
DB_PASSWORD=senha_do_banco_de_dados
```

5. Start the Docker containers using Laravel Sail:

```bash
./vendor/bin/sail up -d
```

6. Run the database migrations to create the necessary tables:

```bash
./vendor/bin/sail artisan migrate
```

7. The project is ready to be executed. Access it in your browser at `http://localhost`.

## License

This project is licensed under the [MIT License](LICENSE).


   
