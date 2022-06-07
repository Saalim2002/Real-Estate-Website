<?php

//Database connection

$host = "localhost";
$dbusername = "root";
$dbPassword = "";
$dbName = "sell";

$conn = new mysqli($host, $dbusername, $dbPassword, $dbName);


//get GET data
            $Iam = $_GET['Iam'];
            $why = $_GET['why'];
            $property = $_GET['property'];
            $email = $_GET['email'];
            $city = $_GET['city'];
            $locality = $_GET['locality'];

//database insert SQL code
$sql= "INSERT INTO dataa(Iam,Why,Property,email,City,Locality) values('$Iam', '$why', '$property', '$email', '$city', '$locality')";

//insert in db
$rs = mysqli_query($conn,$sql);

?>



        