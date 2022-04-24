<?php
    require_once('db.php');
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

        <title>ToDoYing</title>
    </head>
    <body>
        <div class="container w-50 mt-5">
            <div class="rounded-pill bg-light">
                <h1 class="text-center">ToDoYing</h1>
            </div>

            <div class="row">
                <div class="col-md-12 bg-light rounded">
                    <form action="/add.php" method="post">
                        <div class="form-row align-items-center m-2">
                            <div class="col-10">
                                <input type="text" autocomplete="off" name="task" id="task" placeholder="Short description of the task..." class="form-control">
                            </div>
                            <div class="col-2">
                                <button type="submit" name="sendTask" class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <?php
                $query = $pdo->query('SELECT * FROM Tasks ORDER BY id DESC');
                foreach ($query->fetchAll(PDO::FETCH_OBJ) as $task)
                {
                    echo '<div class="row">
                            <div class="col-md-12 mt-2 bg-light rounded">
                                <div class="form-row align-items-center m-2">
                                    <div class="col-10">
                                        <p class="text-left">'.$task->task.'</p>
                                    </div>
                                    <div class="col-2">
                                        <form action="/delete.php" method="post">
                                            <input type="hidden" name="id" value="'.$task->id.'">
                                            <button type="submit" name="deleteTask" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            ?>
        </div>

        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
