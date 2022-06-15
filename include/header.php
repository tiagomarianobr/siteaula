<?php

// Inclui a conexao com o banco de dados
include ("./config/database.php");

?>

<!DOCTYPE html>
<html lang="pt_BR" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Css Personalizado do site -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
<!-- Cabeçalho do site -->
<header>

    <!-- Centraliza os conteudos -->
    <div class="container">

        <!-- Cria uma linha -->
        <div class="row">
            <!-- Cria uma coluna com o tamanho de 4 -->
            <div class="col-md-4">
                <!-- imagem da logo -->
                <img src="assets/img/logo.png" style="max-width: 100%" />
            </div>

            <!-- Cria uma coluna com o tamanho de 8 -->
            <div class=" col-md-8">
                <!-- Menu -->
                <ul>
                    <!-- Itens do menu -->
                    <li>
                        <!-- Link da home -->
                        <a href="index.php">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="">
                            Quem Somos
                        </a>
                    </li>

                    <li>
                        <a href="">
                            Produtos
                        </a>
                    </li>

                    <li>
                        <a href="">
                            Contato
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
