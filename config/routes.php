<?php

use Slim\App;


return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class);
    $app->get('/list', \App\Blog\ListAction::class);
    $app->get('/one/{id}', \App\Blog\OneAction::class);
};