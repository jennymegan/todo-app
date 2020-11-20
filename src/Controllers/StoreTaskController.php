<?php


namespace App\Controllers;


use App\Models\TaskModel;

class StoreTaskController
{

    private TaskModel $taskModel;

    public function __construct($taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function __invoke($request, $response, $args)
    {
        $data = $request->getParsedBody();
        $taskToStore = $data['task'];
        $this->taskModel->storeTask($taskToStore);
        return $response->withHeader('Location', '/');
    }


}