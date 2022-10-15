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
            <p>Hello Stranger, Login Below</p>
        </div>
    </div>
    <div class="row  justify-content-center">
        <div class="col-lg-6">
            <form action="#" method="POST">
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
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
