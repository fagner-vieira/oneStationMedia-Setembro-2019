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
    '/portfolio',
    function () {
        require_once("view/portfolio.php");
    }
);
$app->get(
    '/sleephouse',
    function () {
        require_once("view/sleephouse.php");
    }
);
$app->get(
    '/biblos',
    function () {
        require_once("view/biblos.php");
    }
);
$app->get(
    '/madel',
    function () {
        require_once("view/madel.php");
    }
);
$app->get(
    '/monet',
    function () {
        require_once("view/monet.php");
    }
);
$app->get(
    '/alberflex',
    function () {
        require_once("view/alberflex.php");
    }
);
$app->get(
    '/newworking',
    function () {
        require_once("view/newworking.php");
    }
);
$app->get(
    '/luss',
    function () {
        require_once("view/luss.php");
    }
);
$app->get(
    '/jurubatuba',
    function () {
        require_once("view/jurubatuba.php");
    }
);
$app->get(
    '/venezia',
    function () {
        require_once("view/venezia.php");
    }
);
$app->get(
    '/bluegg',
    function () {
        require_once("view/bluegg.php");
    }
);
$app->get(
    '/clientes',
    function () {
        require_once("view/clientes.php");
    }
);
$app->get(
    '/news',
    function () {
        require_once("view/news.php");
    }
);
$app->get(
    '/contato',
    function () {
        require_once("view/contato.php");
    }
);
$app->run();
