<?php


namespace App\Factories;


use App\Controllers\StoreTaskController;

class StoreTaskControllerFactory
{
    public function __invoke($container): StoreTaskController
    {
        $taskModel = $container->get('TaskModel');
        return new StoreTaskController($taskModel);
    }


}