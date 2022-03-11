
<?php
$server="localhost";
$user="Kennedy2_Public";//
$pwd="gitHub5400";//
$dbase="kennedy2_Response";//


$conn=mysqli_connect($server,$user,$pwd,$dbase);

if(isset($_POST['submit'])){
    if(!empty($_POST['FirstName']) && !empty($_POST['SecondName']) && !empty($_POST['Email']) && !empty($_POST['Comment']))
    {
        
        $FirstName=mysqli_real_escape_string($conn,$_POST['FirstName']);
        $SecondName=mysqli_real_escape_string($conn,$_POST['SecondName']);
        $Email=mysqli_real_escape_string($conn,$_POST['Email']);
        $Comment=mysqli_real_escape_string($conn,$_POST['Comment']);
        $sql="insert into kennedy2_generalcomments(FirstName,SecondName, Email, Comment) values ('$FirstName','$SecondName','$Email','$Comment');";
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
 






