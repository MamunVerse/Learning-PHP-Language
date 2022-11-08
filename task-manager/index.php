<?php
include_once "config.php";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
    throw new Exception("Cannot connect to database");
} else {
    $query = "SELECT * FROM " . DB_TABLE." ORDER BY date";
    $result = mysqli_query($connection, $query);
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
            <h4>All Tasks</h4>
            <?php
            if (mysqli_num_rows($result) == 0) {
                ?>
                <p>No Data Found</p>
                <?php
            } else {
                ?>
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
                        while ($data = mysqli_fetch_assoc($result)){
                            $timestamp = strtotime($data['date']);
                            $date = date("jS M, Y", $timestamp);
                            ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" value="<?php echo $data['id'] ?>">
                                    </td>
                                    <td><?php echo $data['id'] ?></td>
                                    <td><?php echo $data['task'] ?></td>
                                    <td><?php echo $date ?></td>
                                    <td>
                                        <a href="#">Delete</a> |
                                        <a href="#">Edit</a> |
                                        <a href="#">Complete</a>
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

            <form action="">
                <div class="d-flex">
                    <select name="" id="" class="form-control d-inline-block" style="width : 150px;">
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                        <option value="">Option 3</option>
                    </select>
                    <button type="submit" class="ms-4 btn btn-primary" name="submit">Submit</button>
                </div>
            </form>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
