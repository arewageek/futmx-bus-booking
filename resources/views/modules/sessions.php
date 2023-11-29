<?php

session_start();

// Check if Session is set
function errMsg(){
    if (isset($_SESSION['error_msg'])) {
        $output = "<div class=\"alert bg-danger animate__animated position-fixed float-end text-white rounded-0 alert-dismissible d-inline-block fade show\" style=\"top: 15%; right:10px; z-index: 999999999 !important;\" role=\"alert\" id=\"alertMsg\">
        <strong>";
 
        $output .= htmlentities($_SESSION['error_msg']);
        $output .= "</strong> 
             <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
         </div>";
         $_SESSION['error_msg'] = null;
         return $output;
     }     
}
function succMsg(){
    if (isset($_SESSION['success_msg'])) {
        $output = "<div class=\"alert bg-success animate__animated position-fixed float-end text-white rounded-0 alert-dismissible d-inline-block fade show\" style=\"top: 15%; right:10px; z-index: 999999999 !important;\" role=\"alert\" id=\"alertMsg\">
        <strong>";
 
        $output .= htmlentities($_SESSION['success_msg']);
        $output .= "</strong> 
             <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
         </div>";   
         $_SESSION['success_msg'] = null;
         return $output;
     }     
}

function auth(){
    if (!$_SESSION['email']) {
        $_SESSION['error_msg']='please login to book.';
        header("Location: login.php");
    }
}
function name(){
    $_SESSION['first_name'];
}



//    function sms(){
//     $_SESSION['sms']=null;
//    }


