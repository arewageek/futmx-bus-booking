
<?php
require_once 'modules\sessions.php';

$_SESSION['success_msg'] = "Logged out";

session_start();
session_unset();
session_destroy();

$_SESSION['success_msg'] = "Logged out";

header("Location: index.php");





