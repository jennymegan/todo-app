<?php


namespace App\Controllers;


use App\Models\TaskModel;

class HomepageController
{

    private TaskModel $taskModel;

    private $renderer;

    public function __construct($renderer, $taskModel)
    {
        $this->renderer = $renderer;
        $this->taskModel = $taskModel;
    }

    public function __invoke($request, $response, $args)
    {
        $data['tasks'] = $this->taskModel->getUncompletedTasks();
        return $this->renderer->render($response, "homepage.php", $data);
    }

}