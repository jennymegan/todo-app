<?php


namespace App\Factories;


use App\Controllers\HomepageController;

class HomepageControllerFactory
{
    public function __invoke($container): HomepageController
    {
        $renderer = $container->get('renderer');
        $taskModel = $container->get('TaskModel');
        return new HomepageController($renderer, $taskModel);
    }

}