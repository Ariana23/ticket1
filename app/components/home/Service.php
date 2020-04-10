<?php

namespace app\components\home;

use app\components\task\TaskDAO;
use app\components\task\TaskService;

class Service
{
    private $taskService;

    public function __construct()
    {
        $this->taskService = new TaskService();
    }

    public function buildMain()
    {
        Template::build($this->taskService->listTasks());
    }
}