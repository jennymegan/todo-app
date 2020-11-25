<?php


namespace App\Viewhelpers;


class CompletedTasksPageViewhelper
{
    public static function displayCompletedTasks($tasks)
    {
        foreach ($tasks as $task) {
            echo '<div class="task">' . $task['name'] . ' 
            <form method="post" action="/deleteTask/' . $task['id'] . '">
            <input type="submit" value ="Delete">
            </form></div>';
        }
    }

}