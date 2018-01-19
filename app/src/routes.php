<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});


$app->get('/test/info', function ($request,$response, $args) {
    return $this->renderer->render($response,'test/info.phtml',$args);
});

$app->get('/api/people', function ($request,$response, $args) {
    $sth = $this->db->prepare("SELECT * FROM People");
    $sth->execute();
    $todos = $sth->fetchAll();
    $obj = new stdClass();
    $obj->results = $todos;
    return $this->response->withJson($obj);
});
