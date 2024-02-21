<?php
//declaring variables
    $name=$_POST['name'];
    $age=$_POST['age'];
    $blood_group=$_POST['bloodGroup'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];

// Collect post variables
$conn=new mysqli("localhost","root","","sankalp",3307);
$status=mysqli_query($conn,"INSERT into need(Name,Age,Blood_group,Contact_no,Email_id) values('$_POST[name]','$_POST[age]','$_POST[bloodGroup]','$_POST[contact]','$_POST[email]')");

// Execute the query
if($status){
    echo "<h1>Thank you for your contribution our expertise will get back to you soon</h1>";
}
else{
    echo "Error in SQL";
    echo mysqli_error($conn);
}


?>