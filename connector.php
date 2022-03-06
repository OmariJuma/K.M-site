<html>
<body>
<?php 
$con=mysqli_connect("localhost","root","","kennedymaina");
$FirstName=$_POST['FirstName'];
$SecondName=$_POST['SecondName'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];
$mysql="INSERT INTO `userscomments` (`FirstName`,`SecondName`,`Email`,`Message`) VALUES(`$FirstName`,`$SecondName`,`$Email`,`$Message`);"


?>
</body>
</html>

