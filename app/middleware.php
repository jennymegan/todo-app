<?php
declare(strict_types=1);

use Slim\App;

return function (App $app) {
//    $app->add(); // example of how to add Middleware

$app->addBodyParsingMiddleware();
};
