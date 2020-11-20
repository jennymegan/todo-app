<?php


namespace App\Factories;


use App\Controllers\CompletedTaskPageController;

class CompletedTaskPageControllerFactory
{
    public function __invoke($container)
    {
        $renderer = $container->get('renderer');
        $taskModel = $container->get('TaskModel');
        return new CompletedTaskPageController($renderer, $taskModel);
    }

}