<?php


namespace app\components\task;


class TaskService
{
    private $taskDao;

    function __construct()
    {
        $this->taskDao = new TaskDAO();
    }

    public function listTasks()
    {
        return $this->taskDao->listTasks();
    }

    public function saveTask(Task $task)
    {
        $this->taskDao->saveTask($task);
    }

    public function deleteTask($id)
    {
        $this->taskDao->deleteTask($id);
    }
}