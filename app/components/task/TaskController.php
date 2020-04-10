<?php


namespace app\components\task;


class TaskController
{
    private $taskService;

    public function __construct()
    {
        $this->taskService = new TaskService();
    }

    public function saveTask()
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $this->taskService->saveTask(new Task($title, $description));
        header("Location:index.php");
    }

    public function deleteTask($id)
    {
        $this->taskService->deleteTask($id);
        header("Location: index.php");
    }
}