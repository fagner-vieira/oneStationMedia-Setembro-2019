<?php
require 'Slim/Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
// GET route
$app->get(
    '/',
    function () {
        require_once("view/index.php");
    }
);
$app->get(
    '/a-one-station-media',
    function () {
        require_once("view/empresa.php");
    }
);
$app->get(
    '/nossas-solucoes',
    function () {
        require_once("view/solucoes.php");
    }
);
$app->get(
    '/contato',
    function () {
        require_once("view/contato.php");
    }
);
$app->run();
