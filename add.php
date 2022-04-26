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

//        $query = $pdo->query('SELECT * FROM Tasks ORDER BY id DESC');
//        foreach ($query->fetchAll(PDO::FETCH_OBJ) as $task)
//        {
//            echo '<div class="row">
//                                <div class="col-md-12 mt-2 bg-light rounded">
//                                    <div class="form-row align-items-center m-2">
//                                        <div class="col-10">
//                                            <p class="text-left">'.$task->task.'</p>
//                                        </div>
//                                        <div class="col-2">
//                                            <form action="/delete.php" method="post">
//                                                <input type="hidden" name="id" value="'.$task->id.'">
//                                                <button type="submit" name="deleteTask" class="btn btn-danger">Delete</button>
//                                            </form>
//                                        </div>
//                                    </div>
//                                </div>
//                            </div>';
//        }
    }