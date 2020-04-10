<?php

namespace App\Components\Task;

use App\Utils\DataBase;

class TaskDAO
{
    private $connection;

    public function __constructor()
    {
        $conn = DataBase::getConnection();
        if ($conn) {
            $this->connection = $conn;
        } else {
            throw new \Exception("Error en BBDD");
        }
    }

    public function listTasks()
    {
        $query = "SELECT * FROM task";
        return mysqli_query($this->connection, $query);
    }

    public function saveTask(Task $task)
    {
        $title = $task->getTitle();
        $description = $task->getDescription();
        $query = "INSERT INTO task(title, description) VALUES('$title', '$description')";
        $result = mysqli_query($this->connection, $query);
        if (!$result) {
            die("Query Failed");
        }
        $_SESSION['message'] = 'Task Saved';
        $_SESSION['message_type'] = 'success';
    }

    public function deleteTask($id)
    {
        $query = "DELETE FROM task WHERE id = $id";
        $result = mysqli_query($this->connection, $query);
        if (!$result) {
            die("Query Failed");
        }
        $_SESSION['message'] = 'Task Removed';
        $_SESSION['message_type'] = 'danger';
    }
}