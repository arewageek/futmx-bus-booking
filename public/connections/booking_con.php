<?php
require_once '../modules\sessions.php';
require_once 'db_con.php';

if (!isset ($_POST['book'])) {
    $_SESSION['error_msg']='Please Book to continue';
    // header('location:../registerp.php')
}
else {
    
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $destination= $_POST['destination'];
    $no_passengers= $_POST['no_passengers'];
    $travel_time=$_POST['time'];
    $car_type=$_POST['car_type'];
    $travel_date= $_POST['travel_date'];
    $status='pending';

    echo $car_type;
    
    echo auth();

    $sql = 'INSERT INTO booking(user_name,email,destination,no_passengers,travel_time,car_type,travel_date,booking_status) VALUES (?,?,?,?,?,?,?,?)';
    $stmt = mysqli_stmt_init($connectDB); 
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'ssssssss',$user_name,$email,$destination,$no_passengers,$travel_time,$car_type,$travel_date,$status);

    $execute = mysqli_stmt_execute($stmt);

    if ($execute) {
        $_SESSION['success_msg']='Booking successful, pending verification';
        header("Location: ../user_dashboard_booking.php");
      }
      else {
        $_SESSION['error_msg']='Booking Failed';
        header("Location: ../user_dashboard_booking.php");
      }

    // $sql = 'SELECT* FROM register WHERE email = ?';
    // $stmt = mysqli_stmt_init($connectDB);
    // mysqli_stmt_prepare($stmt,$sql);
    // mysqli_stmt_bind_param($stmt,'s',$email);

    // $execute = mysqli_stmt_execute($stmt);
    // $result = mysqli_stmt_get_result($stmt);
    // $numrows = mysqli_num_rows($result);


    // if ($numrows>0) {
    //     $_SESSION['error_msg']='email already exists';
    //     header("Location: ../register.php");
    // }
    // elseif ($password != $con_password) {
    //     $_SESSION['error_msg']='passwords do not match';
    //     header("Location: ../register.php");
    // }
    // elseif (strlen($password) < 5) {
    //     $_SESSION['error_msg']='password must be more than 5 characters';
    //     header("Location: ../register.php");
    // }
    // else {
    //     // $password = password_hash($password, PASSWORD_DEFAULT);
       
      
    //     }

}

