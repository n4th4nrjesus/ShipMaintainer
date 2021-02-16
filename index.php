<?php

/**
 * Todas as requests vêm pra esse arquivo.
 * Este, por sua vez, seta qual rota corresponde a qual arquivo e então redireciona para
 * a rota correta
 */

require_once "router.php";

/** Setando as rotas */

setRoute('', 'index', 'Menu principal');
setRoute('404', '404', 'Página não encontrada');

/** Carregando o header padrão das páginas */

require "./View/inc/head.php";

/** Chamando a rota requisitada */

loadRoute($_SERVER['REQUEST_URI']);

/** Carregando o footer padrão das páginas */

require "./View/inc/footer.php";
