<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="table.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
    <style>
button{
    border-radius:4px;
    font-size:20px;
}
tr{
    font-size:20px;
}
body{
    animation: ani 2s ease forwards;
}
@keyframes ani {
    0%{
        transform: translateX(-100px);
        opacity: 0;
    }
    100%{
        transform: translateX(0);
        opacity: 1;
    }
    
}
.table-wrapper{
    animation:top 2s ease forwards;
}
@keyframes top {
    0%{
        transform: translateY(100px);
        opacity: 0;
    }
    100%{
        transform: translateY(0);
        opacity: 1;
    }
    
}

    </style>
    </head>
<body >
    <nav>
        <div>
            <h2 class="h" style="font-weight: bold;font-family:Georgia, 'Times New Roman', Times, serif">Sankalp Blood Bank</h2>
        </div>
       <p><a href="#">Logout</a><i class="glyphicon glyphicon-log-out" style="font-size:24px;"></i></p>
    </nav>
    <div id="options">
        <ul>
            <li><i class="glyphicon glyphicon-home" style="font-size:24px;"></i><a class="op" href="#">Home</a></li>
            <br>
            <li><i class="glyphicon glyphicon-user" style="font-size:24px;"></i><a class="op" href="#">Donor</a></li>
            <br>
            <li><i class="glyphicon glyphicon-user" style="font-size:24px;"></i><a class="op" href="#">Patient</a></li>
        </ul>

    </div>

    <h2><B> HOSPITAL LISTS</B></h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>S.NO</th>
                <th>HOSPITAL NAME</th>
                <th>CONTACT US</th>
                <th>LOCATION</th>
                <th>Choice</th>
            </tr>
            </thead>
            <?php
$conn=new mysqli("localhost","root","","sankalp",3307);
if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
$sql="SELECT * from hospital";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["S.no"]. "</td><td>".$row["Hospital_name"]."</td><td>".$row["Contact_no"]."</td><td>".$row["Location"]."</td><td>"."<button style='background-color:blue'>Apply</button>"."</td><td>";

    }
    echo "</table>";
}
else{
echo "0 result";
}
$conn->close();
?>
        </table>
    </div>
    </body>
    </html>

  