
<?php
$server="localhost";
$user="Public";
$pwd="gitHub5400";
$dbase="kennedy2_Response"; 


$con=mysqli_connect($server,$user,$pwd,$dbase);

$FirstName=mysqli_real_escape_string($con,$_POST['FirstName']);
$SecondName=mysqli_real_escape_string($con,$_POST['SecondName']);
$Email=mysqli_real_escape_string($con,$_POST['Email']);
$Message=mysqli_real_escape_string($con,$_POST['Message']);
$sql="INSERT INTO GeneralComments(FirstName,SecondName,Email, `Message`) VALUES(`$FirstName`,`$SecondName`,`$Email`,`$Message`);";
mysqli_query($con, $sql);
header("location:index.html?feedback=success");





