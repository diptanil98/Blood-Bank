<?php

session_start();
$_SESSION['login_status']=false;

$name=$_POST['Patient_name'];
$password=$_POST['Password'];
$cipher=md5($password);



$conn=new mysqli("localhost","root","","sankalp",3307);
$status=mysqli_query($conn,"select * from patient where Patient_name='$name' and Password='$cipher'");

 
if($status){
    echo "login Successfully";
    header("location:./patient/details.php");
}
else{
    echo "Error in SQL";
    echo msqli_error($conn);
}
?>