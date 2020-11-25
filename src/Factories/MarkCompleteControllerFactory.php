<?php


namespace App\Factories;


use App\Controllers\MarkCompleteController;

class MarkCompleteControllerFactory
{
    public function __invoke($container): MarkCompleteController
    {
        $taskModel = $container->get('TaskModel');
        return new MarkCompleteController($taskModel);
    }

}