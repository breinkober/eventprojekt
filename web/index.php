<?php
error_reporting(E_ALL);
require_once(__DIR__ . '/../vendor/autoload.php');

$host = $_SERVER['HTTP_HOST'];
/**
 * Create the global Slim Object:
 *
 * @var Slim $app
 */
$app = new \Slim\Slim(
        [
    'mode' => 'development',
    'debug' => true,
    'view' => new \Slim\Views\Twig(),
    'templates.path' => '../templates'
        ]
);

$view = $app->view();
$view->parserOptions = [
    'debug' => true,
    'cache' => '../templates/cache'
];
$view->parserExtensions = [new \Slim\Views\TwigExtension()];
/**
 * This is the object which controls the twig template engine
 *
 * @var $twig Slim
 */
$twig = $app->view()->getEnvironment();
$twig->addGlobal('url', 'http://' . $app->request->getHost() . $app->request->getPath());

$app->get('/', function () use ($app) {
    $app->render('sites/login.html.twig');
});
$app->get('/admin', function() use ($app) {
    $app->render('/sites/admin.html.twig');
});
$app->get('/booking/overview', function() use ($app) {
    $app->render('sites/booking-overview.html.twig');
});
$app->get('/booking/start', function() use ($app) {
    $app->render('sites/booking_start.html.twig');
});
$app->get('/new/event', function() use ($app) {
    $app->render('sites/new-event.html.twig');
});
$app->run();



























