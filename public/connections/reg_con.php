<?php
require_once '../modules\sessions.php';
require_once 'db_con.php';

if (!isset ($_POST['register'])) {
    $_SESSION['error_msg']='Please create an account to continue';
    // header('location:../registerp.php')
}
else {


    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone_number=$_POST['pnum'];
    $password=$_POST['password'];
    $con_password=$_POST['con_password'];
    $date=date('y-m-d');
    $role='user';

    $sql = 'SELECT* FROM register WHERE email = ?';
    $stmt = mysqli_stmt_init($connectDB);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'s',$email);

    $execute = mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $numrows = mysqli_num_rows($result);


    if ($numrows>0) {
        $_SESSION['error_msg']='email already exists';
        header("Location: ../register.php");
    }
    elseif ($password != $con_password) {
        $_SESSION['error_msg']='passwords do not match';
        header("Location: ../register.php");
    }
    elseif (strlen($password) < 5) {
        $_SESSION['error_msg']='password must be more than 5 characters';
        header("Location: ../register.php");
    }
    else {
        // $password = password_hash($password, PASSWORD_DEFAULT);
       
        $sql = 'INSERT INTO register(first_name,last_name,email,phone_number,user_password,date_created,user_role) VALUES (?,?,?,?,?,?,?)';
        $stmt = mysqli_stmt_init($connectDB); 
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,'sssssss',$firstname,$lastname,$email,$phone_number,$password,$date,$role);

        $execute = mysqli_stmt_execute($stmt);

        if ($execute) {
            // echo auth();
            // echo role();
            $_SESSION['success_msg']='Registration successful';
            header("Location: ../register.php");
          }
          else {
            $_SESSION['error_msg']='Registration Failed';
            header("Location: ../register.php");
          }
        }

}

