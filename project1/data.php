<?php
//declaring variables
    $name=$_POST['Patient_name'];
    $password=$_POST['Password'];
    $age=$_POST['Age'];
    $gender=$_POST['Gender'];
    $blood_group=$_POST['Blood_group'];
    $address=$_POST['Address'];

    $cipher=md5($password);

// Collect post variables
$conn=new mysqli("localhost","root","","sankalp",3307);
$status=mysqli_query($conn,"INSERT into patient(Patient_name, Password, Age, Gender, Blood_group, Address) values('$_POST[Patient_name]',' $cipher','$_POST[Age]','$_POST[Gender]','$_POST[Blood_group]','$_POST[Address]')");

// Execute the query
if($status){
    echo "Data Uploaded Successfully";
    header("location:../project1/patient/details.php");
}
else{
    echo "Error in SQL";
    echo mysqli_error($conn);
}


?>