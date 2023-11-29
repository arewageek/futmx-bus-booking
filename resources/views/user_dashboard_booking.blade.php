<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href=""> -->
    <!-- remember to put image for the tab -->
    <link rel="stylesheet" href="assets\css\landing-page.css">
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    @include('modules.dashboard_menu')
    {{-- @include('modules.sessions') --}}
    {{-- // echo succMsg(); echo errMsg(); 
    // echo auth();
    // echo name();

    // echo $email=$_SESSION['email'];
    // echo $name=$_SESSION['first_name']; --}}
<h3 class="text-center">Booking</h3>
<div class="text-center"><img src="transport images\register 2.png" alt=""></div>
<form action="connections\booking_con.php" class="card m-5 p-3 " method="POST">
    <label for="" class="mt-2 form-label">Name:</label>           
    <input type="text" class="form-control" name="user_name" value= <?php $email; ?>>
    <label for="" class="mt-2 form-label">Email:</label>           
    <input type="text"class="form-control" name="email" value="<?php $email; ?>">
    <label for="" class="mt-2 form-label">Destination:</label>
    <select name="destination" id="" class="form-select">
            <option value="#" selected disabled>SELECT DESTINATION</option>
            <option value="B-G">Bosso-GK campus</option>
            <option value="G-B">GK-Bosso campus</option>
    </select>            
    <label for="" class="mt-2 form-label">Number of passenger(s):</label>           
    <input type="number" class="form-control" name="no_passengers">

<div class="row">
        <div class="col-md-4 md-4">
        <label for="" class="mt-2 form-label">Time:</label>           
        <input type="number"class="form-control" name="time">
        </div>
        <div class="col-md-4 md-4">
        <label for="" class="mt-2 form-label">Date:</label>           
        <input type="date"class="form-control" name="travel_date">
        </div>
        <div class="col-md-4 md-4">

        <label for="" class="mt-2 form-label">Car_Type:</label> 
        <select name="car_type" id="" class="form-select">
            <option value="selected" selected disabled>CHOOSE CAR-TYPE</option>
            <option value="32seaters">32 seaters</option>
            <option value="18seaters">18 seaters</option>
            <option value="Sharon">Sharon</option>
            <option value="Marcopolo">Marcopolo</option>
        </select>   

        </div>
</div>
<input type="submit" class="btn btn-danger mt-3" name="book">
</form>

<script src="assets\js\bootstrap.bundle.min.js"></script>
</body>