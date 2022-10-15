<?php

require_once('inc/functions.php');
$info = '';

$task = $_GET['task'] ?? 'report';
$error = $_GET['error'] ?? '0';
if($task == 'seed'){
    seed();
    $info = "Seeding is Complete";

}
$fname = '';
$lname = '';
$roll = '';

if(isset($_POST['submit'])){
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $roll =  filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_STRING);

    if($fname!='' && $lname!='' && $roll!=''){
        $result = addStudent($fname, $lname, $roll);
        if($result){
            header('location: /index.php?task=report');
        }else{
            $error = 1;
        }

    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File based CRUD Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="pt-5">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2>Project 2 -CRUD</h2>
                <p>A simple project to perform CRUD operations using plain files and PHP</p>
                <?php include_once('inc/template/nav.php') ?>
                <hr>
                <?php
                    if($info!=''){
                        echo "<p>{$info}</p>";
                    }
                ?>
            </div>
        </div>
        <?php if($error == '1'): ?>
            <div class="row  justify-content-center">
                <div class="col-lg-8">
                    <blockquote>
                        Duplicate Roll Number
                    </blockquote>
                </div>
            </div>
        <?php endif; ?>
        <?php if($task == 'report'): ?>
            <div class="row  justify-content-center">
                <div class="col-lg-8">
                    <?php generateReport(); ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($task == 'add'): ?>
            <div class="row  justify-content-center">
                <div class="col-lg-8">
                    <form action="index.php?task=add" method="POST">
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" name="fname" class="form-control" value="<?php $fname; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="lname" class="form-control" value="<?php $lname; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Roll</label>
                            <input type="number" name="roll" class="form-control" value="<?php $roll; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary"  name="submit">Submit</button>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
