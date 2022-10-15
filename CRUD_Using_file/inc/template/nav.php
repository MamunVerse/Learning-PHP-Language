<?php
session_start([
'cookie_lifetime' => 300 // 5 Minute
]);
?>
<div class="row mt-4">
    <div class="col-12 d-flex justify-content-between">
        <div class="left">
            <a class="btn btn-success btn-sm" href="/index.php?task=report">All Student</a> |
            <a class="btn btn-success btn-sm" href="/index.php?task=add">Add New Student</a> |
            <a class="btn btn-success btn-sm" href="/index.php?task=seed">Seed</a>
        </div>
        <div class="right">
            <?php
                if(!$_SESSION['loggedin']):
            ?>
                <a class="btn btn-primary btn-sm" href="/auth.php">Login</a>
            <?php
            else:
            ?>
                <a class="btn btn-primary btn-sm" href="/auth.php?logout=true">Log Out</a>
            <?php
                endif;
            ?>

        </div>
    </div>
</div>