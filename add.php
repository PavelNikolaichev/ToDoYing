<?php
    require_once('db.php');

    $task = $_POST['task'];
    if ($task === '')
    {
        echo 'You must enter a task';
    }
    else
    {
        $sql = 'INSERT INTO Tasks(task) VALUES (:task)';
        $query = $pdo->prepare($sql);
        $query->execute(['task' => $task]);

        header('Location: /');
    }