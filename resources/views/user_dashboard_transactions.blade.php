{{-- // require_once 'connections\db_con.php'; --}}
@include('modules.dashboard_menu')
@include('modules.navbar')
 {{-- require_once 'modules\sessions.php'; --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\landing-page.css">
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<h3 class="mt-5 text-center text-danger">Pending</h3>

{{-- 
if ( $email= $_SESSION['email']) {
   
    
    // echo $email;
    $sql = "SELECT * FROM booking WHERE email= '$email' AND booking_status='pending'";
    $query = mysqli_query($connectDB,$sql);

    while($row = mysqli_fetch_assoc($query)){
 --}}

    <!-- pending -->
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <h4 class="text-danger">Pending</h4>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
 
        {{-- <div>
            <h5>Destination: <?php echo $row['destination']; ?></h5>
            <h5>No_passengers: <?php echo $row['no_passengers']; ?></h5>
            <h5>travel time: <?php echo $row['travel_time']; ?></h5>
            <h5>Travel date: <?php echo $row['travel_date']; ?></h5>
            <h5>car type: <?php echo $row['car_type']; ?></h5>
            <h5>Booking status: <?php echo $row['booking_status']; ?></h5>
            <a href="#"><button class="btn btn-danger mt-2">Cancel booking</button></a> --}}

    </div>
      </div>
    </div>
  </div>
</div>
    
    {{-- {{else {
        "NO TRANSACTIONS AVAILABLE. LOGIN TO SEE TRANSACTION HISTORY";
    }}} --}}


    

    <!-- Approved -->
    <h3 class="mt-5 text-center text-success">Approved</h3>
<?php
// if ($email= $_SESSION['email']) {

//     $sql = "SELECT * FROM booking WHERE email= '$email'AND booking_status='approved'";
//     $query = mysqli_query($connectDB,$sql);

//     while($row = mysqli_fetch_assoc($query)){

?>
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h4 class="text-success">Approved</h4>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
 
        <div>
            <h5>Destination: <?php // echo $row['destination']; ?></h5>
            <h5>No_passengers: <?php // echo $row['no_passengers']; ?></h5>
            <h5>travel time: <?php // echo $row['travel_time']; ?></h5>
            <h5>Travel date: <?php // echo $row['travel_date']; ?></h5>
            <h5>car type: <?php // echo $row['car_type']; ?></h5>
            <h5>Booking status: <?php // echo $row['booking_status']; ?></h5>
    </div>
    <a href="payment.php"><button class="btn btn-success mt-2">Proceed to payment</button></a>
      </div>
    </div>
  </div>
</div>
    <?php 
    // else {
    //     echo "NO TRANSACTIONS AVAILABLE. LOGIN TO SEE TRANSACTION HISTORY";
    // }
    ?>

    <script src="assets\js\bootstrap.bundle.min.js"></script>
</body>
</html>