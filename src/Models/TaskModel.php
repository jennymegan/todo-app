<?php


namespace App\Models;


class TaskModel
{
    private $db;

    public function getUncompletedTasks(): array
    {
        $query = $this->db->prepare('SELECT `id`, `name` FROM `tasks` WHERE `completed` = 0');
        $query->execute();
        return $query->fetchAll();
    }

    public function getCompletedTasks(): array
    {
        $query = $this->db->prepare('SELECT `id`, `name` FROM `tasks` WHERE `completed` = 1 AND `deleted` = 0');
        $query->execute();
        return $query->fetchAll();
    }

    public function storeTask(string $task): void
    {
        $query = $this->db->prepare('INSERT INTO `tasks` (`name`) VALUES (?)');
        $query->execute([$task]);
    }

    public function markAsCompleted(int $id): void
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `completed` = 1 WHERE `id` = ?');
        $query->execute([$id]);
    }

    public function delete(int $id): void
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `deleted` = 1 WHERE `id` = ?');
        $query->execute([$id]);
    }

    public function updateTask($task,$id): void
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `name` = ? WHERE `id` = ?');
        $query->execute([$task,$id]);
    }

    public function __construct($db)
    {
        $this->db = $db;
    }

}