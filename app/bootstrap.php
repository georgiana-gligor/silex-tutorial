<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use Silex\Provider\MonologServiceProvider;

$app = new Silex\Application;

$app->register(new MonologServiceProvider(), array(
	'monolog.logfile' => __DIR__ . '/../logs/dev.log'
));

$app
    ->match('/', 'Tutorial\Controller\Status::index')
    ->method('GET|POST');

$app->get('/frameworks', 'Tutorial\Controller\Framework::getAll');
$app->get('/frameworks/{id}', 'Tutorial\Controller\Framework::getOneById');
$app->post('/frameworks', 'Tutorial\Controller\Framework::createOne');
$app->put('/frameworks/{id}', 'Tutorial\Controller\Framework::updateOne');
$app->delete('/frameworks/{id}', 'Tutorial\Controller\Framework::deleteOne');

return $app;
