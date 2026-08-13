<?php

// Delete the cookie by setting its expiry time in the past
setcookie(
    "student_name",
    "",
    time() - 3600,
    "/"
);

// Go back to dashboard
header("Location: dashboard.php");
exit();

?>