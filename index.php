<?php

/**
 * Todas as requests vêm pra esse arquivo.
 * Este, por sua vez, seta qual rota corresponde a qual arquivo e então redireciona para a rota correta
 */

require_once "router.php";

/** Setando as rotas */

setRoute('', 'menu');
setRoute('teste', 'menu');

/** Chamando a rota requisitada */

goToRoute($_SERVER['REQUEST_URI']);
