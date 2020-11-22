<?php


namespace App\Factories;


use App\Controllers\UpdateTaskController;

class UpdateTaskControllerFactory
{
    public function __invoke($container): UpdateTaskController
    {
        $taskModel = $container->get('TaskModel');
        return new UpdateTaskController($taskModel);
    }
}