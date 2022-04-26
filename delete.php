<?php
    require_once('db.php');

    $task_id = $_POST['id'];

    if ($task_id === '')
    {
        echo 'You must enter a task';
    }
    else
    {
        $sql = 'DELETE FROM Tasks WHERE id = ?';
        $query = $pdo->prepare($sql);
        $query->execute([$task_id]);

//        header('Location: /');
    }