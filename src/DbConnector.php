<?php


namespace App;


class DbConnector
{
    public function __invoke() : \PDO
    {
        $db = new \PDO('mysql:host=127.0.0.1;dbname=todo_tasks', 'root','password');
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $db;
    }

}