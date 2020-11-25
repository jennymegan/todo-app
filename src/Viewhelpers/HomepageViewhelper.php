<?php


namespace App\Viewhelpers;


class HomepageViewhelper
{
    public static function displayTaskList($tasks)
    {
        foreach ($tasks as $task) {
            echo '<div class="task">' . $task['name'] . ' 
            <form method="post" action="/markComplete/' . $task['id'] . '">
                <input type="submit" value ="Mark as Complete">
            </form>
            </div>';
        }
    }

}