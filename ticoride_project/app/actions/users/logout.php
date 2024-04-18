<?php
session_start();
session_unset(); //remove all session variables
session_destroy();

header("Location: /pages/users/login.php"); //redirect the user to the login page
exit();
?>