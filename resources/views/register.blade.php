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
 
    {{-- @include'modules.sessions'; --}}
    {{--  echo succMsg(); echo errMsg();  --}}
    

<h2 class="text-center mt-4">New Registration</h2>
    <div>
        <div class="text-center">
        <img src="transport images\register 1.png" alt="">
        </div>
        <form action="connections\reg_con.php" class="card m-5 p-3" method="POST">
            <h2>Get started</h2><i>Already have an account?</i><a href="/login">login</a>
            <label for="firstname" class="form-label mt-2">First name</label>
            <input type="text" id="firstname" class="form-control" autocomplete="off" name="firstname">

            <label for="Lastname" class="form-label mt-2">Last name</label>
            <input type="text" id="Lastname" class="form-control" autocomplete="off" name="lastname">

            <label for="Email" class="form-label mt-2">Email</label>
            <input type="text" id="Email" class="form-control" autocomplete="off" name="email">

            <label for="pnum" class="form-label mt-2">Phone Number</label>
            <input type="number" id="pnum" class="form-control" autocomplete="off" name="pnum">

            <label for="Password" class="form-label mt-2">Password</label>
            <input type="text" id="Password" class="form-control" autocomplete="off" name="password">

            <label for="con_password" class="form-label mt-2">Confirm Password</label>
            <input type="text" id="con_password" class="form-control" autocomplete="off" name="con_password">

            <input type="submit" class="btn btn-danger mt-4" name="register">
        </form>
    </div>
</body>
<script src="assets\js\bootstrap.bundle.min.js"></script>
</html>