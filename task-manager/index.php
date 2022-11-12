<?php
include_once "config.php";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
    throw new Exception("Cannot connect to database");
} else {
    $query = "SELECT * FROM " . DB_TABLE . " WHERE complete=0 ORDER BY date";
    $result = mysqli_query($connection, $query);

    $completeTasksQuery = "SELECT * FROM " . DB_TABLE . " WHERE complete=1 ORDER BY date";
    $completeTasksResult = mysqli_query($connection, $completeTasksQuery);
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager CRUD Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="pt-5">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2>Task Manager - CRUD </h2>
            <p>A simple task manager CRUD operations using MySQL database.</p>
        </div>
    </div>

    <div class="row  justify-content-center mt-4">
        <div class="col-lg-12">

            <?php
                if (mysqli_num_rows($completeTasksResult) > 0) {
                    ?>
                    <h4>Complete Tasks</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Task</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($completeData = mysqli_fetch_assoc($completeTasksResult)) {
                            $ctimestamp = strtotime($completeData['date']);
                            $cdate = date("jS M, Y", $ctimestamp);
                            ?>
                            <tr>
                                <td>
                                    <input type="checkbox" value="<?php echo $completeData['id'] ?>">
                                </td>
                                <td><?php echo $completeData['id'] ?></td>
                                <td><?php echo $completeData['task'] ?></td>
                                <td><?php echo $cdate ?></td>
                                <td>
                                    <a href="#" class="delete" data-task-id="<?php echo $completeData['id'] ?>">Delete</a> |
                                    <a href="#" class="incomplete" data-task-id="<?php echo $completeData['id'] ?>">Incomplete</a>
                                </td>
                            </tr>
                            <?php
                        }
                        mysqli_close($connection);
                        ?>
                        </tbody>
                    </table>
                    <?php
                }
            ?>
            <?php
            if (mysqli_num_rows($result) == 0) {
                ?>
                <p>No Data Found</p>
                <?php
            } else {
                ?>
                <h4>Upcomming Tasks</h4>
                <form action="task.php" method="post">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Task</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($data = mysqli_fetch_assoc($result)) {
                            $timestamp = strtotime($data['date']);
                            $date = date("jS M, Y", $timestamp);
                            ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="taskids[]" value="<?php echo $data['id'] ?>">
                                </td>
                                <td><?php echo $data['id'] ?></td>
                                <td><?php echo $data['task'] ?></td>
                                <td><?php echo $date ?></td>
                                <td>
                                    <a href="#" class="delete" data-task-id="<?php echo $data['id'] ?>">Delete</a>  |
                                    <a href="#" class="complete" data-task-id="<?php echo $data['id'] ?>">Complete</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <div class="d-flex">
                        <select name="action" id="action" class="form-control d-inline-block" style="width : 150px;">
                            <option value="0">With Selected</option>
                            <option value="bulkdelete">Delete</option>
                            <option value="bulkcomplete">Mark As Complete</option>
                        </select>
                        <button type="submit" class="ms-4 btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
                <?php
            }
            ?>

        </div>
    </div>
    <br>
    <br>
    <p>..........</p>
    <div class="row  justify-content-center mt-5">
        <div class="col-lg-12">
            <h4>Add Task</h4>
            <hr>
            <form method="POST" action="task.php">
                <p class="text-success">
                    <?php
                    $added = $_GET['added'] ?? '';

                    if ($added) {
                        echo "Task added successfully";
                    }
                    ?>
                </p>
                <input type="hidden" name="action" value="add">
                <div class="mb-3">
                    <label class="form-label">Task</label>
                    <input type="text" name="task" class="form-control" placeholder="Task Details" value="">
                </div>
                <div class="mb-3">
                    <label class="form-label"> Date</label>
                    <input type="text" name="date" class="form-control" placeholder="Task Date" value="">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Add Task</button>
            </form>
        </div>
    </div>
</div>

<form action="task.php" method="post" id="completeForm">
    <input type="hidden"  name="action" value="complete">
    <input type="hidden" id="taskId" name="taskId">
</form>

<form action="task.php" method="post" id="deleteForm">
    <input type="hidden"  name="action" value="delete">
    <input type="hidden" id="dtaskId" name="taskId">
</form>

<form action="task.php" method="post" id="inCompleteForm">
    <input type="hidden" name="action" value="incomplete">
    <input type="hidden" id="itaskId" name="taskId">
</form>

<script src="assets/js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
       // alert("Done");
        $('.complete').on('click', function (e){
            e.preventDefault();

            let id = $(this).data('task-id');
            $('#taskId').val(id);
            $('#completeForm').submit();
        });

        $('.delete').on('click', function (e){
            e.preventDefault();

            let id = $(this).data('task-id');

            $('#dtaskId').val(id);
            $('#deleteForm').submit();
        });

        $('.incomplete').on('click', function (e){
            e.preventDefault();

            let id = $(this).data('task-id');
            $('#itaskId').val(id);
            $('#inCompleteForm').submit();
        });

    });
</script>
</body>
</html>
