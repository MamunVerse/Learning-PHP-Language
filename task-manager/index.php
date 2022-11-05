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
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Task One</td>
                    <td>1 january</td>
                    <td>
                        <a href="#">Delete</a> |
                        <a href="#">Edit</a> |
                        <a href="#">Complete</a>
                    </td>
                </tr>
                </tbody>
            </table>
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

                    if($added){
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
