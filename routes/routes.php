<?php

include_once 'Request.php';
include_once 'Router.php';

$router = new Router(new Request);

$router->get('/', function() {
	# Ao requisitar via GET o endereço raiz
	# da nossa aplicação vamos popular a view principal	
	include(__DIR__ . '\..\views\principal.php');	
});

$router->post('/gerarTabuada', function($request) {
	if(!isset($_SESSION)) session_start();
	# Armazenamos o número enviado numa requisição
	# via POST em uma variável de sessão para
	# transitar entre as páginas
  	$_SESSION['numero'] = $request->getBody()['numero'];
  	# Populamos o conteúdo da view
  	include(__DIR__ . '\..\views\calcularTabuada.php');
});

?>