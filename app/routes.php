<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();
    $app->get('/', 'HomepageController');
    $app->post('/storeTask', 'StoreTaskController');
    $app->post('/markComplete/{id}', 'MarkCompleteController');
    $app->post('/deleteTask/{id}', 'DeleteTaskController');
    $app->get('/completedTasks', 'CompletedTaskPageController');
    $app->post('/updateTask', 'UpdateTaskController');
};
