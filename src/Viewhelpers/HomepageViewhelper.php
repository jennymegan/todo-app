<?php


namespace App\Viewhelpers;


class HomepageViewhelper
{
    public static function displayTaskList($tasks)
    {
        foreach ($tasks as $task) {
            echo '<li class="swap-for-input" data-id="' . $task['id'] . '">' . $task['name'] . ' 
            <form method="post" action="/markComplete/' . $task['id'] . '">
            <input type="submit" value ="Mark as Complete"></li>
            </form>
            <input type="submit" class="edit" value ="Edit">';
        }
    }

}
