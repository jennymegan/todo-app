<?php


namespace App\Controllers;


use App\Models\TaskModel;

class MarkCompleteController
{

    private TaskModel $taskModel;

    public function __construct( $taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function __invoke($request, $response, array $args)
    {
        $id = $args['id'];
        $this->taskModel->markAsCompleted($id);
        return $response->withHeader('Location', '/');
    }


}