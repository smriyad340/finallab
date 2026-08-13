<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$errors=[];

$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$gender=$_POST["gender"] ?? "";
$position=$_POST["position"];
$qualification=$_POST["qualification"];
$address=$_POST["address"];

if(empty($id))
    $errors[]="Applicant ID is required.";

if(empty($name))
    $errors[]="Name is required.";

if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    $errors[]="Invalid Email.";

if(!preg_match("/^[0-9]{11}$/",$phone))
    $errors[]="Phone must contain 11 digits.";

if(strlen($password)<6)
    $errors[]="Password must be at least 6 characters.";

if(empty($gender))
    $errors[]="Select Gender.";

if(empty($position))
    $errors[]="Select Job Position.";

if(empty($qualification))
    $errors[]="Qualification required.";

if(empty($address))
    $errors[]="Address required.";

if($_FILES["cv"]["error"]==0){

    $filename=$_FILES["cv"]["name"];
    $tmp=$_FILES["cv"]["tmp_name"];
    $size=$_FILES["cv"]["size"];

    $ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));

    $allowed=["pdf","doc","docx"];

    if(!in_array($ext,$allowed))
        $errors[]="Only PDF DOC DOCX allowed.";

    if($size>2*1024*1024)
        $errors[]="Maximum size is 2MB.";

}else{
    $errors[]="Upload CV.";
}

if(count($errors)>0){

    echo "<h2>Application Failed!</h2>";

    foreach($errors as $e)
        echo $e."<br>";

}
else{

    if(!is_dir("uploads")){
        mkdir("uploads");
    }

    move_uploaded_file($tmp,"uploads/".$filename);

    header("Location: result.php?id=$id&name=$name&cv=$filename");
}

}
?>