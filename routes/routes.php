<?php

include_once 'Request.php';
include_once 'Router.php';

$router = new Router(new Request);

$router->get('/', function() {  
  return header("Location: views/principal.php");
});

$router->post('/gerarTabuada', function($request) {
  session_start();
  $_SESSION['numero'] = $request->getBody()['numero'];
  return header("Location: views/calcularTabuada.php");  
});

?>