<?php
// Routes

// $app->get('/[{name}]', function ($request, $response, $args) {
//     // Sample log message
//     $this->logger->info("Slim-Skeleton '/' route");

//     // Render index view
//     return $this->renderer->render($response, 'index.phtml', $args);
// });

$app->get('/contact', function ($request, $response, $args) {
    //まだ未作成
    // $action = new Slim\App\Contact
    // $action -> run();

    //まだ未作成
    return $this->renderer->render($response, 'contact.php', $args);
});


$app->post('/confirm', function ($request, $response, $args) {
    //まだ未作成
    // $action = new Slim\App\Confirm
    // $action -> run();

    //まだ未作成
    return $this->renderer->render($response, 'confirm.php', $args);
});


$app->get('/completion', function ($request, $response, $args) {
    //まだ未作成
    // $action = new Slim\App\Completion
    // $action -> run();

    //まだ未作成
    return $this->renderer->render($response, 'completion.php', $args);
});


$app->any('/{/^a*$/}', function ($request, $response, $args) {
    //まだ未作成
    // $action = new Slim\App\Contact
    // $action -> run();

    //まだ未作成
    return $this->renderer->render($response, 'contact.php', $args);
});