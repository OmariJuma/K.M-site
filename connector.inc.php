
<?php
$server="localhost";
$user="Kennedy2_Public";
$pwd="gitHub5400";
$dbase="kennedy2_Response"; 


$con=mysqli_connect($server,$user,$pwd,$dbase);
if(!$con){
echo "Database not connected";
header("location:index.html?database not connected");
}
if(isset($_POST['submit'])){
    if(!empty($_POST['FirstName']) && !empty($_POST['SecondName']) && !empty($_POST['Email']) && !empty($_POST['Message'])){
        
        $FirstName=mysqli_real_escape_string($con,$_POST['FirstName']);
        $SecondName=mysqli_real_escape_string($con,$_POST['SecondName']);
        $Email=mysqli_real_escape_string($con,$_POST['Email']);
        $Message=mysqli_real_escape_string($con,$_POST['Message']);
        $sql="INSERT INTO GeneralComments(FirstName,SecondName,Email, `Message`) VALUES(`$FirstName`,`$SecondName`,`$Email`,`$Message`);";
        
        header("location:index.html?feedback=success");}

} else{
    echo "All fields required";
}
 






