<?php


namespace App\Controllers;


use App\Models\TaskModel;

class UpdateTaskController
{
    private TaskModel $taskModel;

    public function __construct($taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function __invoke($request, $response, array $args)
    {
        $updateTask = $request->getParsedBody();
        $task = $updateTask['task'];
        $id = $updateTask['id'];
        $this->taskModel->updateTask($task, $id);
        return $response->withHeader('Location', '/');
    }
}