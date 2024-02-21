<?php

session_start();
$_SESSION['login_status']=false;

$name=$_POST['admin_name'];
$password=$_POST['Password'];




$conn=new mysqli("localhost","root","","sankalp",3307);
$status=mysqli_query($conn,"select * from admin where Name='$name' and Password='$password'");

 
if($status){
    echo "login Successfully";
    header("location:./admin_dashboard.html");
}
else{
    echo "Error in SQL";
    echo msqli_error($conn);
}
?>