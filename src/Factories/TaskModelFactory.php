<?php


namespace App\Factories;


use App\Models\TaskModel;

class TaskModelFactory
{
    public function __invoke($container): TaskModel
    {
        $db = $container->get('DbConnector');
        return new TaskModel($db);
    }

}