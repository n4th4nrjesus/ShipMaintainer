<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Ship Maintainer</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./View/css/main.css">
</head>

<body>

    <?php

    /**
     * Todas as requests vêm pra esse arquivo.
     * Este, por sua vez, seta qual rota corresponde a qual arquivo e então redireciona para a rota correta
     */

    require_once "router.php";

    /** Setando as rotas */

    setRoute('', 'index');
    setRoute('404', '404');

    /** Chamando a rota requisitada */

    loadRoute($_SERVER['REQUEST_URI']);

    ?>

</body>

<footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</footer>

</html>