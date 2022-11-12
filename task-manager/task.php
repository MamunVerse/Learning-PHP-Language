<?php

include_once 'config.php';
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$connection){
    throw new Exception("Cannot connect to database");
}else{
    $action = $_POST['action'] ?? '';
    if(!$action){
        header("Location:index.php");
        exit;
    }else{
        if('add' == $action){
            // Insert Code
            $task = $_POST['task'];
            $date = $_POST['date'];


            if($task && $date){
                $query = "INSERT INTO ".DB_TABLE." (task, date) VALUES ('{$task}', '{$date}')";

                mysqli_query($connection, $query);
                header("Location:index.php?added=true");
                exit;
            }
        }elseif ('complete' == $action){
            $taskId = $_POST['taskId'];
            if($taskId){
                $query = "UPDATE ".DB_TABLE." SET complete=1 WHERE id=".$taskId." LIMIT 1";
                mysqli_query($connection, $query);
                header("Location:index.php");
                exit;
            }
        }elseif ('delete' == $action){
            $taskId = $_POST['taskId'];

            if($taskId){

                $query = "DELETE FROM ".DB_TABLE." WHERE id=".$taskId." LIMIT 1";
                mysqli_query($connection, $query);
            }
            header("Location:index.php");
            exit;
        }elseif ('incomplete' == $action){
            $taskId = $_POST['taskId'];

            if($taskId){
                $query = "UPDATE ".DB_TABLE." SET complete=0 WHERE id=".$taskId." LIMIT 1";
                mysqli_query($connection, $query);
            }
            header("Location:index.php");
            exit;
        }elseif ('bulkcomplete' == $action){
            $taskids = $_POST['taskids'];
            $_taskids = join(',',$taskids);
             if($taskids){
                $query = "UPDATE ".DB_TABLE." SET complete=1 WHERE id in (".$_taskids.")";
                mysqli_query($connection, $query);
            }
            header("Location:index.php");
            exit;
        }
    }
}


