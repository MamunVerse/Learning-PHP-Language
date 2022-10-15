<?php

session_start([
    'cookie_lifetime' => 300 // 5 Minute
]);

$error = false;

if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] == 'admin' && md5($_POST['password']) == 'a51e47f646375ab6bf5dd2c42d3e6181'){ // password = rabbit
        $_SESSION['loggedin'] = true;
    }else{
        $_SESSION['loggedin'] = false;
        $error = true;
    }
}

if(isset($_POST['logout'])){
    session_destroy();
    $_SESSION['loggedin'] = false;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="pt-5">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center mb-5">
            <h2>Simple Auth Example</h2>
            <?php
                if($_SESSION['loggedin']){
                    echo "Hello Admin, Welcome";
                }else{
                    echo "Hello Stranger, Login Below";
                }
            ?>
        </div>
    </div>
    <div class="row  justify-content-center">
        <div class="col-lg-6">

            <?php

                if($error){
                    echo "<h6>User Name & Password Don't Match</h6>";
                }
                if(!$_SESSION['loggedin']) :
            ?>
                <form action="auth.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" value="">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </form>
                <?php
                    else:
                ?>
                <form action="auth.php" method="POST">
                    <input type="hidden" name="logout" value="1">
                    <button type="submit" class="btn btn-primary" name="submit">Log Out</button>
                </form>
            <?php
                endif;
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
