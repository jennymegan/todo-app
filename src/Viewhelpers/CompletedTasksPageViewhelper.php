<?php


namespace App\Viewhelpers;


class CompletedTasksPageViewhelper
{
    public static function displayCompletedTasks($tasks)
    {
        foreach ($tasks as $task) {
            echo '<li>' . $task['name'] . ' 
            <form method="post" action="/deleteTask/' . $task['id'] . '">
            <input type="submit" value ="Delete"></li>
            </form>';
        }
    }

}