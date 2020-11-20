<?php


namespace App\Controllers;


use App\Models\TaskModel;

class DeleteTaskController
{

    private TaskModel $taskModel;

    public function __construct(TaskModel $taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function __invoke($request, $response, array $args)
    {
        //how get id? in args?
       // delete and
        $id = $args['id'];
        $this->taskModel->delete($id);

        //redirect back to completed tasks URL
        return $response->withHeader('Location', '/completedTasks');

    }


}