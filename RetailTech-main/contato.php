<?php 

    if(isset($_POST['submit']))
    {

        include_once('config.php') ;

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];

        $result = "INSERT INTO usuarios(nome, email, telefone, senha) 
                  VALUES ('$nome', '$email', '$telefone', '$senha',)";
        

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="imagens/Favicon Roxo.png">
    <link rel="stylesheet" href="segmentos.html">
</head>
<body>
    <!-- Navbar - Início -->
    <header>
        <nav class="navbar navbar-expand-lg text-bg-light p-3 fixed-top ">
            <div class="container">
                <a class="navbar-brand" href="#"><img width="250px" src="imagens/LOGO_ROXA.3.png" alt=""></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse cabeçalho" id="navbarSupportedContent">
                    <ul class="navbar-nav menu">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item menu">
                            <a class="nav-link" href="segmentos.html">Segmentos</a>
                        </li>
                        <li class="nav-item menu">
                            <a class="nav-link" href="solucoes.html">Soluções</a>
                        </li>
                        <li class="nav-item menu">
                            <a class="nav-link" href="contato.html">Contato</a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<!-- Navbar - Fim -->

<div class="container mt-5">
    <h2>Cadastro de Cliente</h2>
    <form>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <input type="submit" name="submit" id="submit" value="enviar" />
    </form>

    <!-- Botão de Entrar em Contato -->
    <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#contatoModal">
        Entrar em Contato
    </button>

</div>

<!-- Modal de Entrar em Contato -->
<div class="modal fade" id="contatoModal" tabindex="-1" aria-labelledby="contatoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contatoModalLabel">Entrar em Contato</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Adicione aqui o formulário de contato ou as informações necessárias -->
                <p>Retail Tech | Filial João Pessoa<br/>
                   Email: ReatilTech@gmail.com <br/>
                   Telefone: (83) 3215-2584</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <!-- Adicione aqui a lógica para lidar com o envio do formulário de contato, se necessário -->
            </div>
        </div>
    </div>
</div>

<!-- Inclua o Bootstrap (JS) no final do corpo para otimizar o carregamento -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>