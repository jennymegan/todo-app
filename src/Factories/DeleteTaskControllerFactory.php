<?php


namespace App\Factories;


use App\Controllers\DeleteTaskController;

class DeleteTaskControllerFactory
{
    public function __invoke($container): DeleteTaskController
    {
        $taskModel = $container->get('TaskModel');
        return new DeleteTaskController($taskModel);
    }


}