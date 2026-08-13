<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_name = $_POST["student_name"];
    $student_id = $_POST["student_id"];
    $email = $_POST["email"];
    $department = $_POST["department"];


    // Store Student Name and Student ID in Session
    $_SESSION["student_name"] = $student_name;
    $_SESSION["student_id"] = $student_id;


    // Store Email and Department
    $_SESSION["email"] = $email;
    $_SESSION["department"] = $department;


    // Create Cookie for 1 hour
    setcookie(
        "student_name",
        $student_name,
        time() + 3600,
        "/"
    );


    // Redirect to dashboard
    header("Location: dashboard.php");
    exit();

}

else {

    header("Location: index.php");
    exit();

}

?>