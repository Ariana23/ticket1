<?php

namespace app\router;

use app\components\home\Controller as Home;
use app\components\task\TaskController;

class Main
{
    public static function routes()
    {
        $taskController = new TaskController();
        $base = $_SERVER['REQUEST_URI'];
        switch ($base) {
            case '/':
            case '/ticket1/':
                Home::load();
                break;
            case '/ticket1/task':
                if (isset($_POST['save_task'])) {
                    $taskController->saveTask();
                }
                break;
            case '/ticket/task/delete':
                if (isset($_GET['id'])) {
                    $taskController->deleteTask($_GET['id']);
                }
                break;
            default:
                Home::load();
        }
    }
}

