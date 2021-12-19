<?php


function resourceInvoice($uri, $controller, $router){

    $router->get($uri,$controller.'@listInvoices');
    $router->post($uri, $controller.'@store');
    $router->get($uri.'/{id}', $controller.'@show');
    $router->put($uri.'/{id}', $controller.'@update');
    $router->delete($uri.'/{id}', $controller.'@destroy');

}


/* main route */
$router->get('/', function () use ($router) {
    return "conectado";
});

/* resource Invoice */
resourceInvoice('/invoice','InvoiceController',$router);


/*rutas login
    $router->post('/users','AuthController@store');
    $router->post('/login','AuthController@login');
    $router->post('/user','AuthController@userActive');


$router->group(['middleware' => 'auth'], function () use ($router){
      resourceInvoice('/invoice','InvoiceController',$router);
});*/










