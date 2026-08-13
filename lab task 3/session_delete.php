<?php

session_start();

// Remove all session variables
session_unset();

// Destroy session
session_destroy();

// Go back to dashboard
header("Location: dashboard.php");
exit();

?>