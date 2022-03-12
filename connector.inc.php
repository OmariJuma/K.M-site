
<?php
$server="localhost";
$user="Kennedy2_Public";
$pwd="gitHub5400";
$dbase="kennedy2_Response";


$conn=mysqli_connect($server,$user,$pwd,$dbase);

if(isset($_POST['submit'])){
    if(!empty($_POST['firstname']) && !empty($_POST['secondname']) && !empty($_POST['email']) && !empty($_POST['comm']))
    {
        
        $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
        $secondname=mysqli_real_escape_string($conn,$_POST['secondname']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $comm=mysqli_real_escape_string($conn,$_POST['comm']);
        $sql="insert into kennedy2_GeneralComments(firstname, secondname, email, comm) values ('$firstname','$secondname','$email','$comm');";
        $run=mysqli_query($conn,$sql);
        if($run==true)
        {
            echo "Form submitted successfully";
            header("location:index.html?feedback=success");
           
        }
        else{
         
            echo "Form not submitted".mysqli_error($conn);
           
        }
    }

} 
else{
    echo "All fields required";
}
 






