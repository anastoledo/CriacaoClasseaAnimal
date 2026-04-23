<?php

require_once __DIR__ . '/../app/core/Autoload.php';
require_once __DIR__ . '/../app/config/Config.php';

use app\core\Router;

$router = new Router();

//Autenticacao
$router->get('/login', 'AutenticacaoController@login');
$router->post('/logar', 'AutenticacaoController@logar');

//Animais
$router->get('/animais', 'AnimalController@index');
$router->get('/animais/visualizar', 'AnimalController@visualizar');
$router->get('/animais/cadastrar', 'AnimalController@cadastrar');
$router->post('/animais/salvar', 'AnimalController@salvar');
$router->get('/animais/editar', 'AnimalController@editar');
$router->post('/animais/atualizar', 'AnimalController@atualizar');
$router->get('/animais/excluir', 'AnimalController@excluir');

$router->get('/teste', 'JogadorController@redirecionarTeste');


$router->run();
