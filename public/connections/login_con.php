<?php
require_once '../modules\sessions.php';
require_once 'db_con.php';        
echo auth();


if (!isset($_POST['login'])) {
    $_SESSION['error_msg']='Please create an account to continue';
    header('Location:../register.php');
}
else{

    echo $email = $_POST['email'];
    echo $password = $_POST['password'];
 
 
    $sql = 'SELECT* FROM register WHERE email = ?';
    $stmt = mysqli_stmt_init($connectDB);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'s',$email);

    $execute = mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $numrows = mysqli_num_rows($result);

    if ($numrows<1) {
        $_SESSION['error_msg']='This user does not exist';
        header("Location: ../login.php");
    }
    else {
        $row = mysqli_fetch_assoc($result);
        $returnedemail = $row['email'];
        $returnedpassword = $row['user_password'];

        if ($returnedemail != $email) {
            $_SESSION['error_msg']='This email does not exist';
            header("Location: ../login.php");
        }

         elseif ($password != $returnedpassword){
            var_dump($row);
            $_SESSION['error_msg']='Incorrect password';
            header("Location: ../login.php");
        }
        else {

                header("Location:../index.php");
                $_SESSION['success_msg'] = "Login Successful, Welcome ".$row['first_name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['role'] = $row['user_role'];
            switch ($_SESSION['role']) {
                case 'admin':
                    header("Location:../admin\approvals.php");
                    echo $row['user_role'];
                    $_SESSION['success_msg'] = "Login Successful, Welcome ".$row['first_name'];
                    break;
                case 'user':
                    header("Location:../user_dashboard_transactions.php");
                    $_SESSION['success_msg'] = "Login Successful, Welcome ".$row['first_name'];
                    break;
                default:
                header("Location:../register.php");
          }
        }
 }
}


 
