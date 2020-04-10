<?php


namespace App\Components\Home;


class Template
{
    public static function build($tasks)
    {
        ?>
        <div class="container p-4">
            <div class="row">

                <div class="col-md-4">

                    <?php if (isset($_SESSION['message'])) { ?>
                        <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show"
                             role="alert">
                            <?= $_SESSION['message'] ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php session_unset();
                    } ?>

                    <div class="card card-body">
                        <form action="/ticket1/task" method="POST">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
                            </div>
                            <div class="form-group">
                        <textarea name="description" rows="2" class="form-control"
                                  placeholder="Task Description"></textarea>
                            </div>
                            <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                        </form>
                    </div>
                </div>

                <div class="col-md-8">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        while ($task = mysqli_fetch_array($tasks)) { ?>
                            <tr>
                                <td><?php echo $task['title'] ?></td>
                                <td><?php echo $task['description'] ?></td>
                                <td><?php echo $task['created_at'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $task['id'] ?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="/ticket1/task/delete?id=<?php echo $task['id'] ?>" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <?php
    }
}