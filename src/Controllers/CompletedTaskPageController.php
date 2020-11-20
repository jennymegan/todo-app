<?php


namespace App\Controllers;


use App\Models\TaskModel;

class CompletedTaskPageController
{

    private TaskModel $taskModel;
    private $renderer;

    public function __construct($renderer, $taskModel)
    {
        $this->taskModel = $taskModel;
        $this->renderer = $renderer;
    }

    public function __invoke($request, $response, $args)
    {
        $data['tasks'] = $this->taskModel->getCompletedTasks();
        return $this->renderer->render($response, "completedTasksPage.php", $data);
    }

}