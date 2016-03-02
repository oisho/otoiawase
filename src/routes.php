<?php
// Routes

// $app->get('/[{name}]', function ($request, $response, $args) {
//     // Sample log message
//     $this->logger->info("Slim-Skeleton '/' route");

//     // Render index view
//     return $this->renderer->render($response, 'index.phtml', $args);
// });
// echo get_class_methods($app)."@route";

$app->map(['get', 'post'],'/contact', function ($request, $response, $args) {

    $contact = new App\Controller\Contact();
    $contact -> run();

    return $this->renderer->render($response, 'contact.php', $args);

})->setName('contact');


$app->post('/confirm', function ($request, $response, $args) {

    $_SESSION['confirm'] = "";

    $confirm = new App\Controller\Confirm();
    $a = $confirm -> run();
    
    if ($a) {
        return $this->renderer->render($response, 'confirm.php', $args);
    } else {
        $_SESSION['err'] = true;
        return $response
        ->withStatus(302)
        ->withHeader('Location', '/contact');
    }
});


$app->post('/completion', function ($request, $response, $args) {
    //まだ未作成
    $action = new App\Controller\Completion(); 
    $action -> run();
    $action -> mail();

    //まだ未作成
    return $this->renderer->render($response, 'completion.php', $args);
});


// $app->any('/{/^a*$/}', function ($request, $response, $args) {
//     //まだ未作成
//     // $action = new Slim\App\Contact
//     // $action -> run();

//     //まだ未作成
//     return $this->renderer->render($response, 'contact.php', $args);
// });