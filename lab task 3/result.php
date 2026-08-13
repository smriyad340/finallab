<?php

$id=$_GET["id"];
$name=$_GET["name"];
$cv=$_GET["cv"];

$requestName=$_REQUEST["name"];
$requestID=$_REQUEST["id"];

?>

<!DOCTYPE html>
<html>

<head>
<title>Application Result</title>
</head>

<body>

<h2>APPLICATION SUCCESSFUL</h2>

Applicant ID:
<?php echo $id; ?>
<br><br>

Applicant Name:
<?php echo $name; ?>
<br><br>

Uploaded CV:
<?php echo $cv; ?>
<br><br>

Using REQUEST

<br>

ID:
<?php echo $requestID; ?>

<br>

Name:
<?php echo $requestName; ?>

</body>
</html>