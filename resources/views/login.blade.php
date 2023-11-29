<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php 
    // require_once 'modules\sessions.php';
    // echo succMsg(); echo errMsg(); 
    ?>

<h2 class="text-center mt-4">Login</h2>
    <div>
        <div class="text-center">
        <img src="transport images\register 2.png" alt="">
        </div>
        <form action="connections\login_con.php" class="card m-5 p-3" method="POST">
            <h2>Get started</h2><i>Do no have an account?</i><a href="/register">Register</a>

            <label for="Email" class="form-label mt-2">Email</label>
            <input type="text" id="Email" class="form-control" autocomplete="off" name="email">

            <label for="Password" class="form-label mt-2">Password</label>
            <input type="text" id="Password" class="form-control" autocomplete="off" name="password">


            <input type="submit" class="btn btn-danger mt-4" name="login">
        </form>
    </div>
    <script src="assets\js\bootstrap.bundle.min.js"></script>
</body>
</html>