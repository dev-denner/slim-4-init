<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class)->setName('home');
    $app->post('/users', \App\Action\UserCreateAction::class);
    $app->get('/users/{id}', \App\Action\UserReadAction::class)->setName('users-get');
};
