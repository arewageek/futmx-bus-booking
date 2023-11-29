<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once '../modules\sessions.php';
require_once '../connections\db_con.php';



if (isset($_GET['verify'])) {
    $id= $_GET['verify'];

    $sql = " UPDATE booking SET booking_status= 'approved' WHERE id= $id";
    $query = mysqli_query($connectDB,$sql);

    if ($query) {
        $_SESSION['success_msg']='verified';
        header('location:../admin\approvals.php');
        // header("Location: ".$_SERVER['HTTP_REFERER']);

    }
    else{
        $_SESSION['error_msg']='verification failed';
        // header('location:../../ad_review.php');
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }

}
elseif (isset($_GET['delete'])){
    $id= $_GET['delete'];

    $sql = "DELETE FROM booking WHERE id=  $id";
    $query = mysqli_query($connectDB,$sql);
    if ($query) {
        $_SESSION['success_msg']='deleted';
        header('location:../admin\approvals.php');
    }
    else{
        $_SESSION['error_msg']='deletion Failed';
        header('location:../admin\approvals.php');
    }
}
else {
    header('location:../admin\approvals.php');
}
?>
<script src="../assets\js\bootstrap.bundle.min.js"></script>

</body>
</html>
