<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title }} - Bookhub</title>
</head>
<body>
<header>
    <h1><a href="{{ route('welcome') }}" class="bookhub">Bookhub</a></h1>
    <nav>
        <ul>
            <li>
                <a href="{{ route('users.index') }}">Controle de Usuários</a>
                <a href="{{ route('books.index') }}">Acervo de Livros</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <h2>{{ $title }}</h2>

    {{ $slot }}
</main>
<footer>
    <section class="contact">
        <h3>Mais informações</h3>
        <ul>
            <li>
                <a class="linkedin" href="https://linkedin.com/in/luizgolima" target="_blank" title="LinkedIn">
                    LinkedIn
                </a>
            </li>
            <li>
                <a class="github" href="https://github.com/luizgolima" target="_blank" title="Github">
                    Github
                </a>
            </li>
            <li>
                <a class="whatsapp" href="https://wa.me/5511992653070" title="WhatsApp">
                    WhatsApp
                </a>
            </li>
            <li>
                <a class="phone" href="tel:+5511992653070" title="Telefone">
                    Telefone
                </a>
            </li>
            <li>
                <a class="mail" href="mailto:lima.luizgo@gmail.com" title="E-mail">
                    E-mail
                </a>
            </li>
        </ul>
    </section>
    <section class="rights">
        <p>© 2023 Desenvolvido por Luiz Lima.</p>
    </section>
</footer>
</body>
</html>
