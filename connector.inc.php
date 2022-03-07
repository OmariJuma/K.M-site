
<?php
$server="localhost";
$user="root";
$pwd=" ";
$dbase="kennedymaina"; 


$con=mysqli_connect($server,$user,$pwd,$dbase);
$FirstName=$_POST['FirstName'];
$SecondName=$_POST['SecondName'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];
$sql="INSERT INTO userscomments(FirstName,SecondName,Email, `Message`) VALUES(`$FirstName`,`$SecondName`,`$Email`,`$Message`);";
mysqli_query($con, $sql);
header("location:home.html?feedback success");





